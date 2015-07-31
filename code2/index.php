<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  require_once("../inc/config.php");
?>

<?php
require_once('database.php');
 try { 
   $results = $db->query('SELECT * from film');
 } catch(Exception $e) {
echo $e->getMessage();
die();
 }
$films = $results->fetchAll(PDO::FETCH_ASSOC);
?>

<?php 
$pageTitle = "My coding projects";
$section = "code";
include(ROOT_PATH . 'inc/header.php'); 
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Code</title>

	<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="examples.css" />
	<style>

	/* Style for our header texts
	* --------------------------------------- */
	h1{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #fff;
		margin:0;
	}
	.intro p{
		color: #fff;
	}

	#listcontainer li {
display: inline;
list-style-type: none;
padding-right: 20px;
	}
	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
	}

	/* Overwriting styles for control arrows for slides
	* --------------------------------------- */
	.controlArrow.prev {
		left: 50px;
	}
	.controlArrow.next{
		right: 50px;
	}


	/* Bottom menu
	* --------------------------------------- */
	/*#infoMenu li a {
		color: #fff;
	} */
	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="vendors/jquery.slimscroll.min.js"></script>

	<script type="text/javascript" src="jquery.fullPage.js"></script>
	<script type="text/javascript" src="examples.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['Portfolio', 'Coding', 'Websites'],
				sectionsColor: ['#8F44AD', '#00BCF2', '#1BBC9B'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['Portfolio', 'Coding', 'Websites']
			});
		});
	</script>

</head>
<body>

<div id="fullpage">

<div class="section" id="Section0">
		<div class="intro">
			<h1>Portfolio</h1>
			<p>coding projects and websites</p>
		</div>
</div>



<div class="section" id="Section1">
	    <div class="slide" id="slide1">
			<div class="intro">
				<h1>Coding</h1>

			</div>
		</div>

		<div class="slide" id="slide2">
		<div class="lightbox">
		  <ul id="imageGallery">
			<li><a href="images/sahalie.jpg"><img src="images/sahalie.jpg" width="150" alt="Sahalie Falls"></a></li>
			<li><a href="images/sahalie2.jpg"><img src="images/sahalie2.jpg" width="150" alt="Sahalie Falls"></a></li>
			<li><a href="images/sahalie3.jpg"><img src="images/sahalie3.jpg" width="150" alt="Sahalie Falls"></a></li>
			<li><a href="images/tulips.jpg"><img src="images/tulips.jpg" width="150" alt="Tulip Festival"></a></li>
			<li><a href="images/craterlake.jpg"><img src="images/craterlake.jpg" width="150" alt="Crater Lake"></a></li>
			<li><a href="images/craterlake2.jpg"><img src="images/craterlake2.jpg" width="150" alt="Crater Lake"></a></li>
			<li><a href="images/craterlake3.jpg"><img src="images/craterlake3.jpg" width="150" alt="Crater Lake"></a></li>
			<li><a href="images/orcoast.jpg"><img src="images/orcoast.jpg" width="150" alt="Oregon Coast"></a></li>
		  </ul>
		<script src="js/lightbox.js" type="text/javascript" charset="utf-8"></script>
		</div>
		</div>
	    
		<div class="slide" id="slide3">
		<canvas	 width="600" height="400"></canvas>
		<div class="controls">
		<ul class="ulControls">
			<li class="red selected"></li>
			<li class="blue"></li>
			<li class="yellow"></li>
		</ul>
		<button id="revealColorSelect">New Color</button>
		<div id="colorSelect">
			<span id="newColor"></span>
			<div class="sliders">
				<p>
					<label for="red">Red</label>
					<input id="red" name="red" type="range" min=0 max=255 value=0>
				</p>
				<p>
					<label for="green">Green</label>
					<input id="green" name="green" type="range" min=0 max=255 value=0>
				</p>
				<p>
					<label for="blue">Blue</label>
					<input id="blue" name="blue" type="range" min=0 max=255 value=0>
				</p>
			</div>
			<div>
			<button id="addNewColor">Add Color</button>
		</div>
		</div>
		</div>
		</div>
	<script src="js/app.js" type="text/javascript" charset="utf-8"></script>	

	<div class="slide" id="slide3">
	<h2>Film menu:


<select name="forma" onchange="location = this.options[this.selectedIndex].value;"> 

<?php 
  foreach($films as $film){

      echo '<option value="#Coding/4">' . $film["title"] . '</option>';
		
} 
?>
</select></h2>
	
	</div>
	
	<div class="slide" id="slide4">

	<h1>Title: <?php
	if (isset($film)) {
		echo $film['title']; 
	}
	?>
	</h1>
	<div class="gallery">
	<ul>
	<h1></h1>
	
	<h2>
	Release Year: <?php

	if (isset($film)) {
		echo $film['release_year']; 
	}
	?>
	</h2>
  	<h2>
	Summary: <?php
	if (isset($film)) {
		echo $film['description']; 
	}
	?>
	</h2>
	</ul>
</div>
<form action="previous.html" onClick="history.back();return false;">
    <input type="submit" value="Back to list">
</form>
	
	</div>
	</div>
		
			


<div class="section" id="Section2">
	    <div class="slide" id="slide1">
			<div class="intro">
		
				<h1>Websites</h1>
			
		</div>
		</div>
		
	    <div class="slide" id="slide2">
				<h1>Versalingua.com</h1>
<ul id="listcontainer">

<li><a href="#"><img src="<?php echo BASE_URL; ?>img/versalingua.png" alt="Versalingua" width="400"></a></li>

</ul>
</div>
		</div>
		


</div>

</body>
</html>