<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico">
	<script type="text/javascript" src="../js/jwplayer/jwplayer.js"></script>
	<script type="text/javascript">jwplayer.key="9/GE4VKRyb1m/76h/+ROWGv30FhIKBqMvJjqjsfvPFULMaqHVrmKSMhCuRM=";</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Add jQuery library -->
	<script type="text/javascript" src="../js/jquery-1.10.1.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../js/source/jquery.fancybox.js?v=2.1.5"></script>

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
      <script type="text/javascript">
        $(document).ready(function() {
                  jwplayer('startTheMovie').setup({
                     file: "../img/nyan.mp4",
                     width: "640",
                     height: "360",
                     controls: "false",
                     
                  });
        });
      </script>
</head>
<body>

	<div class="header">

		<div class="wrapper">
     <div style="display:none">
        <div id="movie">                                    
          <div id="startTheMovie">Loading...</div>                          
        </div>
      </div>
			<h1 class="branding-title"><a class="fancybox-media" href="#movie" onclick='jwplayer().play()'>Jack's Workspace</a></h1>
<label for="show-menu" class="show-menu">Navigation</label>
	<input type="checkbox" id="show-menu" role="button">
	
<!-- NAV MENU -->

		<ul class="nav" id="menu">

		<li class="home <?php if ($section == "home") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>">Home</a></li>
		<li class="articles <?php if ($section == "articles") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>articles/articles.php">Articles</a></li>
		<li class="code <?php if ($section == "code") { echo "on"; } ?>">
			<a href="<?php echo BASE_URL; ?>code/codes.php">Portfolio ￬</a>
			<ul class="hidden">
				<li><a href="<?php echo BASE_URL; ?>code/websites/">Websites</a></li>
				<li><a href="<?php echo BASE_URL; ?>code/lightbox/">Lightbox</a></li>
				<li><a href="<?php echo BASE_URL; ?>code/drawing/">DrawingBox</a></li>
				<li><a href="<?php echo BASE_URL; ?>code/database/">MySQL</a></li>
			</ul>
		</li>
		<li class="contact <?php if ($section == "contact") { echo "on"; } ?>">
			<a href="<?php echo BASE_URL; ?>contact/#About">About ￬</a>
			<ul class="hidden">
				<li><a href="<?php echo BASE_URL; ?>contact/#Resume">Résumé</a></li>
				<li><a href="<?php echo BASE_URL; ?>contact/#Contact">Contact</a></li>
			</ul>
		</li>
		
			<li class="search <?php if ($section == "search") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>search/">Search</a></li>
	</ul>

<!-- END NAV MENU -->

		</div>

	</div>

<div id="content">