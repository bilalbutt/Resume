<div class="w3-card-1 main_cnt summary <?php echo SLIDE_IN_LEFT; ?>" data-wow-delay="0.5s">
	
	<?php /* * / ?>
	<h2 class="w3-text-grey w3-padding-16"><i class="fas fa-puzzle-piece fa-fw w3-margin-right <?php echo $ThemeTextColor; ?>"></i>Skills&nbsp;<?php echo ShowUpIcon(false, $ThemeTextColor, 'more_info skills_up', true); ?></h2>
	<?php /* */ ?>
	
    <h2 class="w3-text-grey w3-padding-16"><i class="fas fa-laptop-code fa-fw w3-margin-right <?php echo $ThemeTextColor; ?>"></i>Worked With&nbsp;<?php echo ShowUpIcon(true, $ThemeTextColor, 'work_with_up', true); ?></h2>
	
	
	<div class="work_with">
		<?php /*
		for ( $a = 0; $a <= (count($WorkWith) - 1); $a++){
			$Details = explode("|", $WorkWith[$a]);
			//echo "<pre>"; print_r($Details); echo "</pre>";
			echo '<li>' . $Details[0] . ' ' . $Details[1] . '</li>';
		} */
		?>
		
		<?php
		for ( $a = 0; $a <= (count($WorkWith) - 1); $a++){
			$Details = explode("|", $WorkWith[$a]);
			$WorkWithToShow = '';
			$WorkWithToShow = '<div class="work_cnt">';
			$WorkWithToShow .= '	<div class="work_icon" title="' . trim($Details[1]) . '"><i class="' . $ThemeTextColor . ' ' . $Details[0] . '"></i></div>';
			$WorkWithToShow .= '	<div class="work_title" title="' . trim($Details[1]) . '">' . trim($Details[1]) . '</div>';
			$WorkWithToShow .= '</div>';
			echo $WorkWithToShow;
		}
		?>
	</div>
</div>
<hr class="thin_hr" />