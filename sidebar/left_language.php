<div class="w3-card-1 main_cnt lang_speak <?php echo SLIDE_IN_LEFT; ?>">
	<h2 class="lang w3-text-grey w3-padding-16"><i class="fas fa-language w3-margin-right <?php echo $ThemeTextColor; ?>"></i>Languages<?php echo ShowUpIcon(true, $ThemeTextColor, 'lang_up', true); //echo UP_ICON; ?></h2>
	<?php for ( $b = 0; $b <= (count($Language) -1); $b++){
		$Details = explode("|",$Language[$b]);
		ShowBar($ThemeColor, trim($Details[0]), trim($Details[1]), 0);
	} ?>
    <br />
</div>
<hr class="thin_hr last_hr" />