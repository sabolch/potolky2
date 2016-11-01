<?php get_header() ?>



	<?php require_once('includes/header-bottom.php'); ?>
	</section>
	<div class="header-buffer"></div>
	<section class="az-middle">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="az-content-left">
						<div class="az-border">
							<?php require_once('includes/catologcomp.php'); ?>
							<?php require_once('includes/vozniklivoprosi.php'); ?>
							<?php require_once('includes/populstatii.php'); ?>
							<?php require_once('includes/fotografii.php'); ?>
							<?php //require_once('includes/video.php'); ?>
							<?php require_once('includes/tovari.php'); ?>
							<?php require_once('includes/o-portale.php'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3">
					<div class="az-content-right">
						<div class="az-border">
							<?php require_once('includes/sidebar2.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="az-buffer"></div>
</div>
<?php get_footer() ?>