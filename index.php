<?php
include_once( "defines.php" );
include_once( "functions.php" );
?>
<!DOCTYPE html>
<head>
<title>My Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='css/style.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<?php if ( ANIMATION == 1 ){?>
	<link rel="stylesheet" href="css/animate.css">
<?php } ?>
<style>
	.main_cnt, .work_detail {
		transition: all 0.8s;
		overflow: hidden;
	}
	.more_info, .more_info_bio, .work_details {
		cursor: pointer;
		transform: rotate(180deg);
	}
</style>
</head>
<body class="<?php echo $ThemeBg;?>">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">
	<div class="w3-row-padding"> 
		<!-- Left Column -->
		<div class="w3-third">
			<div class="w3-white w3-text-grey w3-card-4">
				<div class="w3-display-container">
					<?php include_once("sidebar/left_top.php"); ?>
				</div>
				<div class="w3-container">
					<?php include_once("sidebar/left_summary.php"); ?>
				</div>
				<div class="w3-container">
					<?php include_once("sidebar/left_skills.php"); ?>
				</div>
				<div class="w3-container">
					<?php include_once("sidebar/left_work_with.php"); ?>
				</div>
				<div class="w3-container">
					<?php include_once("sidebar/left_language.php"); ?>
				</div>
				<div class="w3-container">
					<?php include_once("sidebar/left_social.php"); ?>
				</div>
			</div>
			<br>
			<!-- End Left Column --> 
		</div>
		<!-- Right Column -->
		<div class="w3-twothird">
			<div class="w3-container w3-card-2 w3-white w3-margin-bottom main_cnt">
				<?php include_once("profile.php"); ?>
			</div>
			<div class="w3-container w3-card-2 w3-white w3-margin-bottom main_cnt">
				<?php include_once("work_experience.php"); ?>
			</div>
			<div class="w3-container w3-card-2 w3-white w3-margin-bottom main_cnt total_work <?php echo SLIDE_IN_RIGHT; ?>">
				<?php include_once("total_work.php"); ?>
			</div>
			<div class="w3-container w3-card-2 w3-white main_cnt my_education <?php echo SLIDE_IN_RIGHT; ?>">
				<?php include_once("education.php"); ?>
			</div>
			<!-- End Right Column --> 
		</div>
	</div>
</div>
<?php include_once("footer.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php if ( ANIMATION == 1 ){?>
	<script src="js/wow.js"></script>
	<script type="text/javascript">
		$( document ).ready(function() {
			new WOW().init();
		});
	</script>
<?php } ?>
<script src="js/functions.js"></script>
<script src="https://kit.fontawesome.com/b76604fae0.js"></script>
</body>
</html>