<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/normalize.css" type="text/css"> -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

	<div class="header">

		<div class="wrapper">
	
<!-- NAV MENU -->
<label for="show-menu" class="show-menu">Navigation</label>
	<input type="checkbox" id="show-menu" role="button">
		<ul class="nav" id="menu">

		<li class="home <?php if ($section == "home") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>">Home</a></li>
		<li class="services <?php if ($section == "services") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>services/services.php">Services</a></li>
		<li class="about <?php if ($section == "about") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>contact/contact.php">About</a></li>

<!-- END NAV MENU -->

		</div>

	</div>

<div id="content">