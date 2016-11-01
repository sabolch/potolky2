<div class="clearfix"></div>

<section class="ah-head">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="ah-logobox-table">
					<div class="ah-logobox">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ah-logo.png" class="img-responsive" alt="ah-logo"></a>
					</div>
					<span class="ah-head-span">Крупный портал<br>о потолках</span>
				</div>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12">
				<ul class="ah-head-list">
					<? 
				       $args = array(
				         'theme_location'  => '',
				         'menu'            => 'Верхнее меню', 
				         'container'       => flase, 
				         'container_class' => '', 
				         'container_id'    => '',
				         'menu_class'      => 'menu', 
				         'menu_id'         => '',
				         'echo'            => true,
				         'fallback_cb'     => 'wp_page_menu',
				         'before'          => '',
				         'after'           => '',
				         'link_before'     => '',
				         'link_after'      => '',
				         'items_wrap'      => '<ul class="menu_navbar">%3$s</ul>',
				         'depth'           => 0
				       );
				       wp_nav_menu($args ); 
				      ?>
				</ul>
				<form action="<?php bloginfo( 'url' ); ?>" class="ah-head-form">
					<label>
						<input type="text" name="s" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"  placeholder="Искать на сайте, например натяжной потолок своими руками ...">
						<input type="submit" value="">
					</label>
				</form>
			</div>
		</div>
	</div>
</section>

<div class="clearfix"></div>

