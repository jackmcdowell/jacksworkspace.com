<?php

 require_once("../../inc/config.php");

$pageTitle = "Email Domain Crawler";
$section = "code";
include(ROOT_PATH . 'inc/header.php');

/* This file contains instructions for three different states of the form:
 *   - Displaying the initial search form
 *   - Handling a form submission and ...
 *       - ... displaying the results if matches are found.
 */

// if a non-blank search term is specified in
// the query string, perform a search

$startURL = "http://jacksworkspace.com";
$depth = 6;
if (isset($_GET["s"])) {
	$startURL = trim($_GET["s"]);
	if ($startURL != "") {
		require_once("crawler.php");
	}
}

?>
	<div class="section articles search page">

		<div class="wrapper">

			<h1>Email Searcher</h1>
			<p>This program searches a domain for emails and outputs them to an array<br>
			Try it out by searhing http://jacksworkspace.com<br>
			Our webhost doesn't let this script run on other sites but you can see the project on <a style="text-decoration:underline" href="https://github.com/jackmcdowell/domainEmailCrawler" target="_blank">GitHub</a></p>
			<form method="get" action="./">
				<?php // pre-populate the current search term in the search box; ?>
				<?php // if a search hasn't been performed, then that search term ?>
				<?php // will be blank and the box will look empty ?>
				<input type="text" name="s" value="<?php echo htmlspecialchars($startURL); ?>">
				<input type="submit" value="Go">
			</form>

			<?php // if a search has been performed ... ?>
			<?php if ($startURL != "") : ?>

				<?php // if there are products found that match the search term, display them; ?>
				<?php // otherwise, display a message that none were found ?>
				<?php if (!empty($startURL)) : ?>

					<ul>
						<?php
							echo '<pre>'; print_r($array); echo '</pre>';
							echo '<pre>'; print_r($emailarray); echo '</pre>';
						?>
					</ul>
				<?php else: ?>
					<p>No products were found matching that search term.</p>
				<?php endif; ?>

			<?php endif; ?>

		</div>

	</div>

<?php include(ROOT_PATH . "inc/footer.php"); ?>