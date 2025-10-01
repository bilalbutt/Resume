<h2 class="w3-text-grey w3-padding-16 education"><i class="fa-solid fa-award w3-margin-right w3-xxlarge <?php echo $ThemeTextColor; ?>"></i>Certificates<?php echo ShowUpIcon(false, $ThemeTextColor, 'edu_up', true); ?></h2>
<?php
for ( $a = 0; $a <= (count($Certificates) - 1); $a++){
	$Details = explode("|",$Certificates[$a]);
	//PrintR( $Details );

	$Animation = '';
	if ( $a % 2 == 0 ){
		$Animation = SLIDE_IN_LEFT;
	}else{
		$Animation = SLIDE_IN_RIGHT;
	}
	echo $Animation . "";

	ShowCertificates( $ThemeTextColor, $Details[0], $Details[1], $Details[2], $Details[3], $Details[4], $Animation = '' );
}
?>