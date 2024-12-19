<div class="w3-card-1 main_cnt myskills <?php echo SLIDE_IN_LEFT; ?>">
	<h2 class="w3-text-grey w3-padding-16"><i class="fas fa-puzzle-piece fa-fw w3-margin-right <?php echo $ThemeTextColor; ?>"></i>Skills<?php echo ShowUpIcon(false, $ThemeTextColor, 'skills_up', true); ?></h2>
	<?php for ( $a = 0; $a <= (count($Skills) - 1); $a++){
		$Details = explode("|",$Skills[$a]);
		ShowBar($ThemeColor, trim($Details[0]), trim($Details[1]) );
	} ?>
</div>
<hr class="thin_hr" />