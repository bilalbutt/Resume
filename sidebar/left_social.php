<?php if(SHOW_SOCIAL_MEDIA == 1){?>
	<div class="w3-card-1 main_cnt summary <?php echo SLIDE_IN_LEFT; ?>" data-wow-delay="0.5s">
		<h2 class="w3-text-grey w3-padding-16"><i class="fas fa-hashtag w3-margin-right <?php echo $ThemeTextColor; ?>"></i>Social Media&nbsp;<?php echo ShowUpIcon(true, $ThemeTextColor, 'social_up', true); ?></h2>		
		<div class="social_icon">
			<?php for ( $a = 0; $a <= (count($SocialIcons) - 1); $a++){
				$Details = explode("|", $SocialIcons[$a]);
				//PrintR( $Details );
				echo '<div class="si_cnt"><a href="' . trim($Details[0]) . '" title="' . trim($Details[2]) . '">' . trim($Details[1]) . '</a></div>';
			} ?>
		</div>
		<br />
		<?php /* */ ?>
	</div>
	<hr class="thin_hr" />
<?php } ?>