<?php

define("BR", "<br />");

$ThemeColorArr = array("w3-amber", "w3-blue", "w3-light-blue", "w3-brown", "w3-cyan", "w3-blue-grey", "w3-green", "w3-light-green", "w3-indigo", "w3-lime", "w3-orange", "w3-deep-orange", "w3-purple", "w3-deep-purple", "w3-red", "w3-teal", "w3-black", "w3-grey", "w3-dark-grey");
$ThemeBgArr = array ( "w3-white", "w3-grey", "w3-light-grey", "w3-dark-grey", "w3-black", "w3-blue-grey" );
$ImgArr = array ( "Bilal-Kabeer-Butt-1.jpg", "Bilal-Kabeer-Butt-2.jpg", "Bilal-Kabeer-Butt-3.jpg", "Bilal-Kabeer-Butt-4.jpg", "Bilal-Kabeer-Butt-5.jpg", "Bilal-Kabeer-Butt-6.jpg" );
$ThemeColor = $ThemeColorArr[array_rand($ThemeColorArr, 1)];
//$ThemeColor = "w3-purple";

$ThemeTextColor =  str_replace( "w3-", "w3-text-", $ThemeColor ) ;
$ThemeBg = $ThemeBgArr[array_rand($ThemeBgArr, 1)];
$Img = $ImgArr[array_rand($ImgArr, 1)];
//$ThemeBg = 'w3-black';

define ("UP_ARROW", '<i class="fa-solid fa-caret-up w3-margin-right w3-xxlarge ' . $ThemeTextColor . ' more_info"></i>' );
define ("UP_ARROW_BIO", '<i class="fa-solid fa-caret-up w3-hide-small  w3-margin-right w3-xxlarge ' . $ThemeTextColor . ' more_info_bio"></i>' );

//define( 'UP_ICON', '<span class="w3-hide-medium w3-hide-large">&nbsp;</span><span class="w3-hide-small">&nbsp;&nbsp;&nbsp;</span><i class="fas fa-chevron-circle-down w3-margin-right w3-xxlarge ' . $ThemeTextColor . ' more_info"></i>' );
define( 'UP_ICON', '<span class="w3-hide-medium w3-hide-large">&nbsp;</span><span class="w3-hide-small">&nbsp;&nbsp;&nbsp;</span>' . UP_ARROW );

//define( 'UP_ICON_BIO', '<span class="w3-hide-small">&nbsp;&nbsp;&nbsp;</span><i class="w3-hide-small fas fa-chevron-circle-down w3-margin-right w3-xxlarge ' . $ThemeTextColor . ' more_info_bio"></i>' );
define( 'UP_ICON_BIO', '<span class="w3-hide-small">&nbsp;&nbsp;&nbsp;</span>' . UP_ARROW_BIO );

define( 'CAL_ICON', ' fa-regular fa-calendar fa-2x' );
//<i class="fa-regular fa-hourglass-half"></i>
//<i class="fa-regular fa-hourglass"></i>
define( 'CAL_ICON2', 'fa-regular fa-hourglass' );

// ANIMATION EFFECTS
$RightAnimationArr = array( "fadeInLeftBig", "fadeInTopLeft", "fadeInBottomLeft", "slideInLeft" );
$LeftAnimationArr = array( "fadeInRightBig", "fadeInTopRight", "fadeInBottomRight", "slideInRight" );

$RightAnimation = $RightAnimationArr[array_rand($RightAnimationArr, 1)];
$LeftAnimation = $LeftAnimationArr[array_rand($LeftAnimationArr, 1)];

//echo "RIGHT: " . $RightAnimation . BR . "LEFT: " . $LeftAnimation . BR;

// SET 1 TO SHOW FOOTER
define ( 'SHOW_FOOTER', '1' );

// SET 1 TO ADD DESIGNATION SECTION
define( 'SHOW_DESIGNATION', '0');

// SET 1 TO ADD PDF DOWNLOAD SECTION
define( 'SHOW_PDF', '0');

// SET 1 TO ADD ANIMATION TO SECTIONS
define( 'ANIMATION', 0);
if ( ANIMATION == 1 ){
	define ( 'SLIDE_IN_LEFT' ,  'wow ' . $LeftAnimation );
	define ( 'SLIDE_IN_RIGHT' , 'wow ' . $RightAnimation );
}else{
	define ( 'SLIDE_IN_LEFT' , '' );
	define ( 'SLIDE_IN_RIGHT' , '' );
}

include_once("data/bio.php");
include_once("data/skills.php");
include_once("data/work_with.php");
include_once("data/education.php");
include_once("data/certificates.php");
include_once("data/job_details.php");
?>