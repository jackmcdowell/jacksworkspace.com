<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico">

	<!-- Add jQuery library -->
	<script type="text/javascript" src="../js/jquery-1.10.1.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../js/source/jquery.fancybox.js?v=2.1.5"></script>

	<!-- <link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen" /> -->
<script type="text/javascript" src="../js/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
 
	<script type="text/javascript">
		$(document).ready(function() {

			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

		});

	</script>

</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a class="fancybox-media" href="http://www.youtube.com/watch?v=QH2-TGUlwu4">Jack's Workspace</a></h1>

			<ul class="nav">
				<?php
				  /* list items with a class of "on" indicate the current section; those links 
				   * are underlined in the CSS to communicate that back to the site visitor;
				   * the $section variable is set in each individual file
				   */
				?>
				<li class="home <?php if ($section == "home") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>">Home</a></li>
				<li class="articles <?php if ($section == "articles") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>articles/articles.php">Articles</a></li>
				<li class="code <?php if ($section == "code") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>code/codes.php">Code</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
				<li class="search <?php if ($section == "search") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>search/">Search</a></li>
				<!-- <li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=Q6NFNPFRBWR8S&amp;display=1">Shopping Cart</a></li> -->
			</ul>

		</div>

	</div>

	<div id="content">