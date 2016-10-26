<div class="az-breadcrumbs-outer">
	<?php include_once ('breadcramp.php') ?>
</div>
<h1 class="az-pad">Услуги и товары</h1>
<div class="az-margin-top20">
	<?php 
        wp_reset_query(); 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $wp_query = new WP_Query(array(
            'paged'          => $paged,  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => "ASC",
            'caller_get_posts'=> 1)
        ); ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post();?>

    <div class="az-col1">
		<div class="az-cat">
			<div class="az-img-box az-img-box_style">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>

				<div class="az-col">более 230 статей</div>
			</div>
			<div class="az-cat-title az-margin-top10"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
			<ul class="az-cat-list az-margin-top10">
				<li><a href="#">Материал для потолка</a></li>
				<li><a href="#">Рейки</a></li>
				
			</ul>
		</div>
	</div>    

    <?php endwhile; ?>
	
	
	
	
	
	
	<div class="clearfix"></div>
</div>

<div class="az-uslugi-content">
	<span class="az-uslugi-title">Категория товара - Крашенные потолки - Краска для потолка</span>
	
</div>
<div class="az-uslugi-table az-margin-top20">
	<div class="az-row-head">
		<div class="az-th1">Названии</div>
		<div class="az-th2">Компании</div>
		<div class="az-th3">Цены</div>
		<div class="clearfix"></div>
	</div>
	<div class="az-row az-zapis-border az-zapis-border_style">
		<div>
			<div class="az-kras-item">
				<div class="az-kras-left">
					<div class="az-img-box2 az-img-box2_style4 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/az-kras1.jpg" alt="">
					</div>
				</div>
				<div class="az-kras-right">
					<span class="az-kras-right1">Потолочная краска для дерева</span>
					<span class="az-kras-right2 az-margin-top10">Бежевый</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div>
			<div class="az-firm-item az-firm-item_style">
				<div class="az-firm-left">
					<div class="az-img-box2 az-img-box2_style2 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/comp1.jpg" alt="">
					</div>
				</div>
				<div class="az-firm-right">
					<span class="az-firm-right1 az-margin-top8 az-xs-margin-top0">Потолок Эверест</span>
					<span class="az-firm-right2 az-margin-top8">
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-firm-right2-inner">Средняя оценка 4.0</span>
					</span>
					<span class="az-firm-right3 az-margin-top8">Москва ул. Савельево 230 офис 32</span>
					<span class="az-firm-right4 az-margin-top8">8 800 900-30-40</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="az-tovar-price2"><strong>200-290</strong>р</div>
		<i class="clearfix"></i>
	</div>
	<div class="az-row az-zapis-border az-zapis-border_style">
		<div>
			<div class="az-kras-item">
				<div class="az-kras-left">
					<div class="az-img-box2 az-img-box2_style4 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/az-kras1.jpg" alt="">
					</div>
				</div>
				<div class="az-kras-right">
					<span class="az-kras-right1">Потолочная краска для дерева</span>
					<span class="az-kras-right2 az-margin-top10">Бежевый</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div>
			<div class="az-firm-item az-firm-item_style">
				<div class="az-firm-left">
					<div class="az-img-box2 az-img-box2_style2 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/comp1.jpg" alt="">
					</div>
				</div>
				<div class="az-firm-right">
					<span class="az-firm-right1 az-margin-top8 az-xs-margin-top0">Потолок Эверест</span>
					<span class="az-firm-right2 az-margin-top8">
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-firm-right2-inner">Средняя оценка 4.0</span>
					</span>
					<span class="az-firm-right3 az-margin-top8">Москва ул. Савельево 230 офис 32</span>
					<span class="az-firm-right4 az-margin-top8">8 800 900-30-40</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="az-tovar-price2"><strong>200-290</strong>р</div>
		<i class="clearfix"></i>
	</div>
	<div class="az-row az-zapis-border az-zapis-border_style">
		<div>
			<div class="az-kras-item">
				<div class="az-kras-left">
					<div class="az-img-box2 az-img-box2_style4 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/az-kras1.jpg" alt="">
					</div>
				</div>
				<div class="az-kras-right">
					<span class="az-kras-right1">Потолочная краска для дерева</span>
					<span class="az-kras-right2 az-margin-top10">Бежевый</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div>
			<div class="az-firm-item az-firm-item_style">
				<div class="az-firm-left">
					<div class="az-img-box2 az-img-box2_style2 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/comp1.jpg" alt="">
					</div>
				</div>
				<div class="az-firm-right">
					<span class="az-firm-right1 az-margin-top8 az-xs-margin-top0">Потолок Эверест</span>
					<span class="az-firm-right2 az-margin-top8">
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-firm-right2-inner">Средняя оценка 4.0</span>
					</span>
					<span class="az-firm-right3 az-margin-top8">Москва ул. Савельево 230 офис 32</span>
					<span class="az-firm-right4 az-margin-top8">8 800 900-30-40</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="az-tovar-price2"><strong>200-290</strong>р</div>
		<i class="clearfix"></i>
	</div>
	<div class="az-row az-zapis-border az-zapis-border_style">
		<div>
			<div class="az-kras-item">
				<div class="az-kras-left">
					<div class="az-img-box2 az-img-box2_style4 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/az-kras4.jpg" alt="">
					</div>
				</div>
				<div class="az-kras-right">
					<span class="az-kras-right1">Потолочная краска для дерева</span>
					<span class="az-kras-right2 az-margin-top10">Бежевый</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div>
			<div class="az-firm-item az-firm-item_style">
				<div class="az-firm-left">
					<div class="az-img-box2 az-img-box2_style2 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/comp3.jpg" alt="">
					</div>
				</div>
				<div class="az-firm-right">
					<span class="az-firm-right1 az-margin-top8 az-xs-margin-top0">Потолок Эверест</span>
					<span class="az-firm-right2 az-margin-top8">
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-firm-right2-inner">Средняя оценка 4.0</span>
					</span>
					<span class="az-firm-right3 az-margin-top8">Москва ул. Савельево 230 офис 32</span>
					<span class="az-firm-right4 az-margin-top8">8 800 900-30-40</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="az-tovar-price2"><strong>200-290</strong>р</div>
		<i class="clearfix"></i>
	</div>
	<div class="az-row az-zapis-border az-zapis-border_style">
		<div>
			<div class="az-kras-item">
				<div class="az-kras-left">
					<div class="az-img-box2 az-img-box2_style4 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/az-kras3.jpg" alt="">
					</div>
				</div>
				<div class="az-kras-right">
					<span class="az-kras-right1">Потолочная краска для дерева</span>
					<span class="az-kras-right2 az-margin-top10">Бежевый</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div>
			<div class="az-firm-item az-firm-item_style">
				<div class="az-firm-left">
					<div class="az-img-box2 az-img-box2_style2 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/comp2.jpg" alt="">
					</div>
				</div>
				<div class="az-firm-right">
					<span class="az-firm-right1 az-margin-top8 az-xs-margin-top0">Потолок Эверест</span>
					<span class="az-firm-right2 az-margin-top8">
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-firm-right2-inner">Средняя оценка 4.0</span>
					</span>
					<span class="az-firm-right3 az-margin-top8">Москва ул. Савельево 230 офис 32</span>
					<span class="az-firm-right4 az-margin-top8">8 800 900-30-40</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="az-tovar-price2"><strong>200-290</strong>р</div>
		<i class="clearfix"></i>
	</div>
	<div class="az-row az-zapis-border az-zapis-border_style">
		<div>
			<div class="az-kras-item">
				<div class="az-kras-left">
					<div class="az-img-box2 az-img-box2_style4 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/az-kras2.jpg" alt="">
					</div>
				</div>
				<div class="az-kras-right">
					<span class="az-kras-right1">Потолочная краска для дерева</span>
					<span class="az-kras-right2 az-margin-top10">Бежевый</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div>
			<div class="az-firm-item az-firm-item_style">
				<div class="az-firm-left">
					<div class="az-img-box2 az-img-box2_style2 az-img-box2_style3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/comp1.jpg" alt="">
					</div>
				</div>
				<div class="az-firm-right">
					<span class="az-firm-right1 az-margin-top8 az-xs-margin-top0">Потолок Эверест</span>
					<span class="az-firm-right2 az-margin-top8">
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-yellow2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-star-grey2">&nbsp;</span>
						<span class="az-firm-right2-inner">Средняя оценка 4.0</span>
					</span>
					<span class="az-firm-right3 az-margin-top8">Москва ул. Савельево 230 офис 32</span>
					<span class="az-firm-right4 az-margin-top8">8 800 900-30-40</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="az-tovar-price2"><strong>200-290</strong>р</div>
		<i class="clearfix"></i>
	</div>
</div>