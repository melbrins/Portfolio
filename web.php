<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Ui / Ux - Anthony Pucelle - Melbrins</title>
	<meta name="description" content="Freelance Ui / UX Designer, have a look at my latest website projects involving: Design, Front-End and Back-End">
	<meta name="author" content="Anthony Pucelle">

	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<?php include 'layout/head.php'; ?>

</head>
<body id="portfolio">

	<?php include 'layout/header.php'; ?>
	
	<!-- ============================================ *
	* SECTION - WORK
	* ============================================ -->
	<div class="work section section--grey">

			<div class="section--content">
				<ul class="work--list">

					<!--  VISION DIRECT  -->
					<?php include 'layout/project-block/vision-direct.php'; ?>

	  				<!--  MERCHMAKER  -->
	  				<?php include 'layout/project-block/merchmaker.php'; ?>

	  				<!--  CHOOSEY  -->
	  				<?php include 'layout/project-block/choosey.php'; ?>

				</ul>
			</div>
	</div>
	<!-- page -->

<?php include 'layout/footer.php'; ?>

</body>

<?php include 'layout/after-body.php'; ?>
	
</html>