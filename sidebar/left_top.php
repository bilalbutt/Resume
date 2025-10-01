<div class="top_cont">
	<img class="img animate__animated animate__zoomIn" src="images/<?php echo $Img; ?>" style="width:100%" alt="Bilal Kabeer Butt" />
</div>
<div class="w3-container bio_cnt <?php echo SLIDE_IN_LEFT; ?>">
	<div class="w3-display-bottomleft w3-container <?php echo $ThemeTextColor; ?> full_name">
		<h2><i class="far fa-id-badge" aria-hidden="true"></i> <?php echo NAME; ?><?php echo UP_ICON_BIO; ?></h2>
	</div>
	
	<?php if ( SHOW_DESIGNATION == 1 ){ ?>
		<p><i class="fas fa-briefcase fa-2x w3-margin-right w3-large1 <?php echo $ThemeTextColor; ?>"></i><?php echo DESIGNATION; ?></p>
	<?php } ?>
	<p><i class="fa-solid fa-house-chimney-user fa-2x w3-margin-right w3-large1 <?php echo $ThemeTextColor; ?>"></i><?php echo CITY; ?></p>
	<p><i class="fa-solid fa-square-envelope fa-2x w3-margin-right w3-large1 <?php echo $ThemeTextColor; ?>"></i><?php echo EMAIL; ?></p>
	<p><i class="fa-solid fa-mobile-screen fa-2x w3-margin-right w3-large1 <?php echo $ThemeTextColor; ?>"></i><?php echo MOBILE; ?></p>

	<?php if( SHOW_PDF == 1 ){ ?>
		<p><i class="far fa-file-pdf fa-2x w3-margin-right w3-large1 <?php echo $ThemeTextColor; ?>"></i><a href="my-cv-web.pdf"><?php echo DOWNLOAD_TEXT; ?></a></p>
	<?php } ?>
	
</div>
<div class="w3-container">
    <hr class="thin_hr">
</div>