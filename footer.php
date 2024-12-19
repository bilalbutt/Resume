<?php if( SHOW_FOOTER == 1 ){ ?>
<footer class="w3-container <?php echo $ThemeColor; ?> w3-center w3-margin-top">
	<p>Find me on social media.<br />
		<ul class="social_icon">
			<?php for ( $a = 0; $a <= (count($SocialIcons) - 1); $a++){
				$Details = explode("|", $SocialIcons[$a]);
				$sicon = str_replace($ThemeTextColor, "", trim($Details[1])) ;
				echo '<li><a href="' . trim($Details[0]) . '" title="' . trim($Details[2]) . '">' . $sicon . '</a></li>';
			} ?>
		</ul>
    </p>
</footer>
<?php } else{
	echo "<br />";
}
include_once("back_to_top.php"); ?>