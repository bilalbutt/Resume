<?php

function CalCulateDuration( $StartDate, $EndDate ) {
	$date1 = date_create( $EndDate );
	$date2 = date_create( $StartDate );
	$diff = date_diff( $date1, $date2 );

	$DurYear = $diff->y;
	$DurMonth = $diff->m;
	$DurDay = $diff->d;
	$Duration = '';
	$DurYearStr = '';
	$DurMonthStr = '';
	$DurDayStr = '';

	if ( $DurYear != 0 ) {
		if ( $DurYear > 1 ) {
			$DurYearStr = 'years';
		} else {
			$DurYearStr = 'year';
		}
		$Duration = $DurYear . ' ' . $DurYearStr;
	}
	if ( $DurMonth != 0 ) {
		if ( $DurMonth > 1 ) {
			$DurMonthStr = 'months';
		} else {
			$DurMonthStr = 'month';
		}

		if ( $Duration != '' ) {
			$Duration .= ", " . $DurMonth . " " . $DurMonthStr;
		} else {
			$Duration = $DurMonth . " " . $DurMonthStr;
		}
	}
	if ( $DurDay != 0 ) {
		if ( $DurDay > 1 ) {
			$DurDayStr = 'days';
		} else {
			$DurDayStr = 'day';
		}

		if ( $Duration != '' ) {
			$Duration .= ", " . $DurDay . " " . $DurDayStr;
		} else {
			$Duration = $DurDay . " " . $DurDayStr;
		}
	}
	//echo "<pre>"; print_r( $diff ); echo "</pre>";
	//echo $diff->format("%R%a days");	
	return " (" . $Duration . ")";
}

function SumStrTime( $ExpArr ) {
	//echo "<hr /><pre>"; print_r( $ExpArr ); echo "</pre>";
	$date = date_create( date( "Y-m-d" ) );
	for ( $a = 0; $a <= ( count( $ExpArr ) - 1 ); $a++ ) {
		//$Exp = CalCulateDuration("2013-09-01",date("Y-m-d"));
		$dta = str_replace( "(", "", $ExpArr[ $a ] );
		$dta = str_replace( ")", "", $dta );
		$Exps2 = date_add( $date, date_interval_create_from_date_string( $dta ) );
	}
	//echo "<pre>"; print_r( $Exps2 ); echo "</pre>";
	$date1 = date_create( $Exps2->format( 'Y-m-d' ) );
	$date2 = date_create( date( "Y-m-d" ) );
	$diff = date_diff( $date1, $date2 );
	//echo "<hr /><pre>"; print_r( $diff ); echo "</pre>";

	$DurYear = $diff->y;
	$DurMonth = $diff->m;
	$DurDay = $diff->d;

	$Duration = '';
	$DurYearStr = '';
	$DurMonthStr = '';
	$DurDayStr = '';

	if ( $DurYear != 0 ) {
		if ( $DurYear > 1 ) {
			$DurYearStr = 'years';
		} else {
			$DurYearStr = 'year';
		}
		$Duration = $DurYear . ' ' . $DurYearStr;
	}

	if ( $DurMonth != 0 ) {
		if ( $DurMonth > 1 ) {
			$DurMonthStr = 'months';
		} else {
			$DurMonthStr = 'month';
		}

		if ( $Duration != '' ) {
			$Duration .= ", " . $DurMonth . " " . $DurMonthStr;
		} else {
			$Duration = $DurMonth . " " . $DurMonthStr;
		}
	}

	if ( $DurDay != 0 ) {
		if ( $DurDay > 1 ) {
			$DurDayStr = 'days';
		} else {
			$DurDayStr = 'day';
		}

		if ( $Duration != '' ) {
			$Duration .= " and " . $DurDay . " " . $DurDayStr;
		} else {
			$Duration = $DurDay . " " . $DurDayStr;
		}
	}
	//return "" . $diff->format( "%y Year %m Month %d Day");
	return $Duration;
}

function ShowBar( $ThemeColor, $Text, $BarPer, $ShowPer = true ) {
	if ( $ShowPer == true ) {
		$Show = 1;
		$CusStyle = '';
	} else {
		$Show = 0;
		$CusStyle = ' style="height:20px;" ';
	}
	$Bar = '<p>' . $Text . '</p>';
	$Bar .= '<div class="w3-light-grey w3-round-xlarge w3-small">';
	$Bar .= '	<div class="anim_prg w3-container w3-center w3-round-xlarge ' . $ThemeColor . '" data-show-number="' . $Show . '" data-prog="' . $BarPer . '%"' . $CusStyle . '></div>';
	$Bar .= '</div>';
	echo $Bar;
}

function ShowEducation( $ThemeColor, $InstitutionName, $DegreeYear, $Degree, $AnimationClass = '' ) {
	$Edu = '';
	$Edu .= '<div class="' . $AnimationClass . '">';
	$Edu .= '	<div class="w3-container">';
	$Edu .= '		<h4 class="w3-opacity"><b>' . $InstitutionName . '</b></h4>';
	$Edu .= '		<h5 class="' . $ThemeColor . '"><i class="fas fa-school fa-2x w3-margin-right"></i>' . $DegreeYear . '</h6>';
	$Edu .= '		<p>' . $Degree . '</p>';
	$Edu .= '	</div>';
	$Edu .= '</div>';
	$Edu .= '<hr>';
	echo $Edu;
}

function ShowWork( $ThemeColor, $JobTitle, $CompanyName, $StartDate, $EndDate, $JobDescription, $AnimationClass = '', $JobType = 'Full') {

	//echo "<h4>Start Date; " . $StartDate . "| End Date; " . $EndDate . "</h4>";
	$ThemeTextColor =  str_replace( "-text-", "-", $ThemeColor );

	$Work = '';
	$Work .= '<div class="job_detail ' . $AnimationClass . '">';
	$Work .= '	<div class="w3-container work_detail">';
	$Work .= '		<h3><i class="' . $ThemeColor . ' fas fa-laptop-house"></i>&nbsp;<span class="w3-opacity">' . $JobTitle . ' / ' . $CompanyName . '</span></h3>';

	$Sdate = date_create( $StartDate );
	$StDate = date_format( $Sdate, "jS, M, Y" );
	$Edate = date_create( $EndDate );
	
	if ( $EndDate == date("Y-m-d") ){
		$EdDate = '<span class="w3-tag ' . $ThemeTextColor . ' w3-round">Current</span>';
		//$Exp = ""; //CalCulateDuration( $StartDate, $EndDate );
		$Exp = CalCulateDuration( $StartDate, $EndDate );
	/* */
	}else if( $EndDate == "remote" ){
		$EndDate2 = date("Y-m-d");
		$EdDate = '<span class="w3-tag ' . $ThemeTextColor . ' w3-round">Remote</span>';
		$Exp = CalCulateDuration( $StartDate, $EndDate2 );
	/* */
	}else{
		$EdDate = date_format( $Edate, "jS, M, Y" );
		$Exp = CalCulateDuration( $StartDate, $EndDate );
	}

	$Work .= '		<h6 class="' . $ThemeColor . '"><i class="' . CAL_ICON . ' fa-2x w3-margin-right"></i><p>' . $StDate . ' - ' . $EdDate;	
	$Work .= '	<span>' . $Exp . '</span></p></h6>';
	$Work .= '		<ul>';
	for ( $a = 0; $a <= ( count( $JobDescription ) - 1 ); $a++ ) {
		$Work .= '			<li>' . $JobDescription[ $a ] . '</li>';
	}
	$Work .= '		</ul>';
	$Work .= '	</div>';
	$Work .= '		<hr />';
	$Work .= '</div>';
	echo $Work;
}

function ShowUpIcon( $SmallHide, $ThemeTextColor, $class = 'more_info', $SingleSpace = false ) {
	$UpIcon = '';
	if ( $class != '' ){
		$CssClass = 'more_info ' . $class;
		$IconCss = 'fa-chevron-circle-down';		
	}else{
		$CssClass = 'more_info';
		$IconCss = 'fa-chevron-circle-down';
	}	
	if ( $SmallHide == true ) {		
		if ( $SingleSpace == true ){
			$UpIcon .= '<span class="w3-hide-medium w3-hide-large">&nbsp;</span>';
		}		
		$UpIcon .= '<span class="w3-hide-small">&nbsp;&nbsp;&nbsp;</span><i class="fas ' . $IconCss . ' w3-margin-right w3-xxlarge ' . $ThemeTextColor . ' ' . $CssClass . '"></i>';
	} else {
		$UpIcon = '&nbsp;&nbsp;&nbsp;<i class="fas ' . $IconCss . ' w3-margin-right w3-xxlarge ' . $ThemeTextColor . ' ' . $CssClass . '"></i>';
	}
	
	return $UpIcon;
}

function AddAnimation(){
	if ( ANIMATION == 1 ){
		
	}
}

function PrintR($arr){
    echo "<pre>"; print_r($arr); echo "</pre>";
}
?>