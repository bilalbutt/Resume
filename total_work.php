<h2 class="w3-text-grey w3-padding-16"><i class="fab fa-black-tie w3-margin-right w3-xxlarge <?php echo $ThemeTextColor; ?>"></i>Total Work Experience<?php echo ShowUpIcon(false, $ThemeTextColor, 'twork_up', true); ?></h2>
<h5 class="w3-opacity"><b>Feb 2004 - <?php echo date("M Y"); ?></b></h5>

<?php
//echo "<pre>"; print_r( $ExpArr ); echo "</pre><hr />";
$WorkTotal = array();
$WorkInd = array();
//echo "<pre>"; print_r( $ExpArr ); echo "</pre><hr />";

if ( isset($ExpArr) && !empty($ExpArr) ){
    foreach ($ExpArr as $key => $value) {       
		$WorkExp = '';
        $WorkExp .= '<h4 class="w3-text-grey w3-padding-none"><i class="' . $ThemeTextColor . ' ' . CAL_ICON2 . ' w3-margin-right"></i><b>' . $key . ' </b><br />' . SumStrTime($ExpArr[$key]) . '</h4>';
        $WorkExp .= '<hr  style="margin: 10px 0px;" />';
		
        $WorkInd[] = $WorkExp;
        $WorkTotalRaw = SumStrTime($ExpArr[$key]);
        $WorkTotalStr = str_replace( ' and ', ', ', $WorkTotalRaw );
        $WorkTotal[] = $WorkTotalStr;
    } ?>
    <h3 class="w3-text-grey w3-padding-none"><i class="<?php echo $ThemeTextColor . ' ' . CAL_ICON2; ?> w3-margin-right"></i><b>Total Work Experience</b><br /><?php echo SumStrTime($WorkTotal); ?></h3>
    <hr  style="margin: 10px 0px;" />
    <?php 
	//echo "<pre>"; print_r( $WorkInd ); echo "</pre><hr />";
    for( $b=0; $b <= (count($WorkInd)-1); $b++ ){
        echo $WorkInd[$b];
    } 
}
?>
<br />