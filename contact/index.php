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

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
$pageTitle = "About Page";
$section = "contact";
include(ROOT_PATH . 'inc/header.php'); 
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>About</title>

	<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />

	<style>


	</style>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="vendors/jquery.slimscroll.min.js"></script>

	<script type="text/javascript" src="jquery.fullPage.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['About', 'Resume', 'Contact'],
				sectionsColor: ['#8F44AD', '#3498db', '#34495e'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['About', 'Resume', 'Contact']
			});
		});
	</script>

</head>
<body>

<div id="fullpage">

<div class="section" id="Section0">
		<div class="intro">
			<h1>About</h1>
			<img class="profile-photo" src="<?php echo BASE_URL; ?>img/jack.jpg" alt="Profile Picture">
			<p>I'm Jack McDowell and I coded this website from scratch.</p>
			<p>I'm currently the Editor in Chief of USA Hispanic Press,</p>
			<p>but I created this website to showcase some of my coding skills.</p>
		</div>
</div>



<div class="section" id="Section1">
	    <div class="slide" id="slide1">
			<div class="intro">
				<h1><a href="McDowell.Resume.pdf" target="_blank">Résumé</a></h1>
				<h2><a href="https://www.linkedin.com/in/mcdowelljack" src="https://www.linkedin.com/in/mcdowelljack">Linkedin Profile</a></h2>
				<h3>Education</h3>
				<ul>
				<li>Certificates in Ruby, PHP, Rails, Web Development, Web Design, Wordpress, Java and Business (Treehouse Inc.: 2015)</li>
				<li>Master's Degree in Political Science (University of Oregon: 2012)</li>
				<li>Bachelor's Degree in English Literature and Spanish as a Heritage Speaker (Slippery Rock University: 2007)</li>
				</ul>
				<h3>Experience</h3>
				<ul>
				<li>Editor in Chief: USA Hispanic Press (2013-present)</li>
				<li>Consultant: The International Baccalaureate (2014-present)</li>
				<li>Graduate Teaching Fellow: University of Oregon (2008-2013)</li>
				<li>IT Consultant: The International Baccalaureate (2007-2011)</li>
				</ul>
				
			</div>
		</div>
</div>


<div class="section" id="Section2">
	    <div class="slide" id="slide1">
			<div class="intro">
		
		<h1>Contact</h1>
				
          <ul class="contact-info">
          <li class="phone"><a href="tel:646-642-3521">646-642-3521</a></li>
          <li class="mail"><a href="mailto:jackmcdowell@gmail.com">jackmcdowell@gmail.com</a></li>
          <li class="facebook"><a href="http://facebook.com/jackmc83">Facebook</a></li>   

     	   </ul>
     

            <?php // if status=thanks in the query string, display an thank you message instead of the form ?>
            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { 
                // header('Refresh: 10; index.php');
                ?>
                <p>Thanks for the email! I&rsquo;ll be in touch shortly !</p>

            <?php } else { ?>

                <?php
                    if (!isset($error_message)) {
                        echo '<p>You can also reach me using this fancy contact form:</p>';
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

    </div>
    </div>


			</div>
		</div>
		

</div>
</div>
		



</body>
</html>