<?php
/*
Template Name: Страница услуг
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
				<?php
				    while( have_posts() ) : the_post();
					the_content(); 

				endwhile; 
				?>
				
			</div>
		</div>
	</section>
	<div class="az-buffer"></div>
</div>

<?php get_footer() ?>

