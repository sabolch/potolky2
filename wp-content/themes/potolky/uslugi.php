<?php
/*
Template Name: Услуги и товары
*/
?>
<?php get_header() ?>

<div class="az-content">
	<section class="az-header">
		<?php require_once('includes/header.php'); ?>
	</section>
	<section class="az-middle">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="az-content-left">
						<div class="az-border">
							<?php require_once('includes/uslugi.php'); ?>
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