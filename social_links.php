<?php 
$SocialLinks = '';
$SocialLinks = '<ul class="social_icon">';
for ( $a = 0; $a <= (count($SocialIcons) - 1); $a++){
    $Details = explode("|", $SocialIcons[$a]);
    $sicon = str_replace($ThemeTextColor, "", trim($Details[1])) ;
    $SocialLinks .= '<li><a target="_blank" href="' . trim($Details[0]) . '" title="' . trim($Details[2]) . '">' . $sicon . '</a></li>';
}
$SocialLinks .= '</ul>';
echo $SocialLinks;
?>