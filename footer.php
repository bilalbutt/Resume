<?php if( SHOW_FOOTER == 1 ){ ?>
<footer class="w3-container <?php echo $ThemeColor; ?> w3-center w3-margin-top">
	<p>Find me on social media.<br />
		<?php include("social_links.php"); ?>
    </p>
</footer>
<?php } else{
	echo "<br />";
}
include_once("back_to_top.php"); ?>