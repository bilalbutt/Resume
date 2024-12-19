<h2 class="w3-text-grey w3-padding-16 education"><i class="fas fa-graduation-cap w3-margin-right w3-xxlarge <?php echo $ThemeTextColor; ?>"></i>Education<?php echo ShowUpIcon(false, $ThemeTextColor, 'edu_up', true); ?></h2>
<?php for ( $a = 0; $a <= (count($Education) - 1); $a++){
	$Details = explode("|",$Education[$a]);
	$Animation = '';
		if ( $a % 2 == 0 ){
			$Animation = SLIDE_IN_LEFT;
		}else{
			$Animation = SLIDE_IN_RIGHT;
		}
	ShowEducation($ThemeTextColor, $Details[0], $Details[1], $Details[2], $Animation);
} ?>