<?php
  require_once("../inc/config.php");

/* This file contains instructions for three different states of the form:
 *   - Displaying the initial contact form
 *   - Handling the form submission and sending the email
 *   - Displaying a thank you message
 */

// a request method of post indicates that
// we are receiving a form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // the form has fields for name, email, and message
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // the fields name, email, and message are required
    if ($name == "" OR $email == "" OR $message == "") {
        $error_message = "You must specify a value for name, email address, and message.";
    }

    // this code checks for malicious code attempting
    // to inject values into the email header
    if (!isset($error_message)) {
        foreach( $_POST as $value ){
            if( stripos($value,'Content-Type:') !== FALSE ){
                $error_message = "There was a problem with the information you entered.";
            }
        }
    }

    // the field named address is used as a spam honeypot
    // it is hidden from users, and it must be left blank
    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Your form submission has an error.";
    }

    require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message = "You must specify a valid email address.";
    }

    // if, after all the checks above, there is no message, then we
    // have a valid form submission; let's send the email
    if (!isset($error_message)) {
        $email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Email: " . $email . "<br>";
        $email_body = $email_body . "Message: " . $message;

        $mail->SetFrom($email, $name);
        $address = "versalingua@gmail.com";
        $mail->AddAddress($address, "Jack McDowell");
        $mail->Subject    = "Webpage Sumission | " . $name;
        $mail->MsgHTML($email_body); 

        // if the email is sent successfully, redirect to a thank you page;
        // otherwise, set a new error message
        if($mail->Send()) {
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=' . BASE_URL . 'contact/?status=thanks">';  
            // $error_message = "There was a problem sending the email: "
            // header("Location: " . BASE_URL . "contact/?status=thanks");
            exit;
        } else {
          $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
        }

    }
} ?>

<?php 
$pageTitle = "About Page";
$section = "contact";
include(ROOT_PATH . 'inc/header.php'); 
?>

<head>

	<title>Contact</title>
		<h1>Contact</h1>
        	<div class="section services latest">
				<div class="intro">
				<div class="contactInfo">
			    <div class="contactForm">
                    <ul class="contact-info">
          				<p>Thanks for your interest in ACR Automotive<br>You can reach us at the following number</p>
                    <li class="phone"><a href="tel:541-997-6700">541-997-6700</a></li>
<!--           <li class="mail"><a href="mailto:jackmcdowell@gmail.com">jackmcdowell@gmail.com</a></li>
          <li class="facebook"><a href="http://facebook.com/jackmc83">Facebook</a></li></ul>   -->
            <?php // if status=thanks in the query string, display an thank you message instead of the form ?>
            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { 
                // header('Refresh: 10; index.php');
                ?>
                <p>Thanks for the email! I&rsquo;ll be in touch shortly !</p>

            <?php } else { ?>

                <?php
                    if (!isset($error_message)) {
                        echo '<p>or you can reach us via the following form:</p>';
                    } else {
                        echo '<p class="message">' . $error_message . '</p>';
                    }
                ?>

                <form method="post" action="<?php echo BASE_URL; ?>contact/">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
                            </td>
                        </tr> 
                        <tr style="display: none;">
                            <?php // the field named address is used as a spam honeypot ?>
                            <?php // it is hidden from users, and it must be left blank ?>
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address">
                                <p>Humans (and frogs): please leave this field blank.</p>
                            </td>
                        </tr>                   
                    </table>
                    <input type="submit" value="Send">

                </form>

            <?php } ?>
</div>

<div class="info">              
 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:500px;width:600px;color:black;">
<div id="gmap_canvas" style="height:500px;width:600px;"></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>
<script type="text/javascript"> function init_map(){var myOptions = {
	zoom:14,
	center:new google.maps.LatLng(43.9797146,-124.10219089999998),
	mapTypeId: google.maps.MapTypeId.ROADMAP};
	map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(43.9797146, -124.10219089999998)});
	infowindow = new google.maps.InfoWindow({content:"<b>ACR Automotive</b><br/>1736 15th St<br/>97439 Florence" });
	// google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
	infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
	</script>
           
</div></div></div></div></div></div></div>



<?php include(ROOT_PATH . 'inc/footer.php') ?>