<?php get_header() ?>

</section>
<section class="az-middle">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="az-content-left">
					<div class="az-border">
					<div class="ab-single-wrap de-single-wrap">

							<h1>Поиск по: "<?php echo $_GET['s'];?>"</h1>
							<ol>
							<?php if (have_posts()) : while (have_posts()) :  ?> 
								<li> <?php the_post(); ?> 
									<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
								</li>
								<?php 
										//the_content(''); 
								?>
							<?php endwhile; else: ?>
							</ol>
							<p>Поиск не дал результатов.</p>
						<?php endif;?>

					</div>
				</div>
			</div>
		</div>	
		<div class="col-md-3">
			<div class="az-content-right">
				<div class="sidebar">
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