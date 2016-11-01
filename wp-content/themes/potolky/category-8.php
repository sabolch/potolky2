
<?php get_header() ?>

	</section>
	<section class="az-middle">
		<div class="container">
			<div class="row">
				<section class="test">
					<div class="subcat">
						<ul class="subcateg">
						<?php
						if (count(get_categories('child_of='.$cat)))
						if (is_category()) {
						$current_cat=get_query_var('cat');
						wp_list_categories('child_of='.$current_cat.'&title_li=&show_count=1');} ?>
						</ul>
					</div>
				</section>
				<div class="col-md-8 col-lg-9">
					<div class="az-content-left">
						<div class="az-border">

							<?php require_once('includes/uslugi.php'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3">
					<div class="sidebar">
						<div class="az-content-right">
							<?php  dynamic_sidebar( 'secondary-widget-area' ); ?>
							<div class="az-border">
								<?php require_once('includes/sidebar2.php'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="az-buffer"></div>
</div>

<?php get_footer() ?>