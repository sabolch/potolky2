<?php
/*
Template Name: Compani
*/
?>
<?php get_header() ?>

</section>

<script src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>

<section class="az-middle">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-9">
				<div class="az-content-left">
					<div class="az-border">
						<?php require_once('includes/compani.php'); ?>
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