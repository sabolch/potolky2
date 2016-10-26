
<?php get_header() ?>

	</section>
	<section class="az-middle">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="az-content-left">
						<div class="az-border">
							<div class="ab-single-wrap">
							<?php
				    			while( have_posts() ) : the_post(); ?>
								<?php include_once ('includes/breadcramp.php') ?>
								<h1><?php the_title() ?></h1>
								<?php the_content() ?>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
				<div class="col-md-3">
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

