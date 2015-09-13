<?php
  require_once("../../inc/config.php");
?>
<?php 
$pageTitle = "Drawing Application";
$section = "code";
include(ROOT_PATH . 'inc/header.php'); 
?>
    <div class="section page">  
    <div class= "wrapper">
  	<h1>jQuery Drawing Application</h1>
	<p>This program allows one to draw on a canvas<br>If you would like to know more, the code is available on <a style="text-decoration:underline" href="https://github.com/jackmcdowell/JQueryDrawingApplication" target="_blank">GitHub</a></p>

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
		</div>	</div>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/app.js" type="text/javascript" charset="utf-8"></script>	
<?php include(ROOT_PATH . 'inc/footer.php') ?>