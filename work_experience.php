<div class="<?php echo SLIDE_IN_RIGHT; ?>">
	<h2 class="work_exp w3-text-grey w3-padding-16"><i class="fas fa-briefcase w3-margin-right w3-xxlarge <?php echo $ThemeTextColor; ?>"></i>Work Experience<?php echo ShowUpIcon(true, $ThemeTextColor, 'work_up', true ); ?></h2>
	<?php
	// echo "<pre>"; print_r( $Work ); echo "</pre><hr />";
	$WorkRev = array_reverse( $Work );
	//echo "<pre>"; print_r( $WorkRev ); echo "</pre><hr />";
	
	if ( isset( $WorkRev ) && $WorkRev != "" ) {
		for ( $ab = ( count( $Work ) - 1 ); $ab >= 0; $ab-- ) {
			$Animation = '';
			if ( $ab % 2 == 0 ){
				$Animation = SLIDE_IN_LEFT;
			}else{
				$Animation = SLIDE_IN_RIGHT;
			}
			
			$StartDate = $Work[ $ab ][ 'StartDate' ];
			$EndDate = $Work[ $ab ][ 'EndDate' ];

			ShowWork( $ThemeTextColor, $Work[ $ab ][ 'JobTitle' ], $Work[ $ab ][ 'CompanyName' ], $StartDate, $EndDate, $Work[ $ab ][ 'JobDescription' ], $Animation );

			if ( $Work[ $ab ][ 'EndDate' ] == "remote" ){
				$EndDate = date("Y-m-d");
			}else{
				$EndDate = $Work[ $ab ][ 'EndDate' ];
			}

			$Exp = CalCulateDuration( $StartDate, $EndDate );
			$JobType = $Work[ $ab ][ 'JobField' ];
			switch ( $JobType ) {
				case "IT":
					$ExpArr[ 'IT' ][] = $Exp;
					break;

				case "Teaching":
					$ExpArr[ 'Teaching' ][] = $Exp;
					break;

				case "Hardware":
					$ExpArr[ 'Hardware' ][] = $Exp;
					break;
			}
		}
	}?>
</div>