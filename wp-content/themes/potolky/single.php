
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
								<!-- <div class="ab-brad-crumps">
									<a href="#">О потолках</a>
									/
									<a href="#">Статьи</a>
									/
									<span>Путь до внутренней страницы</span>
								</div> -->
								<h1><?php the_title() ?></h1>
								<div class="ab-metki">
									<span><a href="#">Натяжные потолки</a></span>
									<span><a href="#">Комментариев 87</a></span>
								</div>
								<div class="ab-single-txt">
									<span>
										Стык стены и пола декорируется плинтусом, который имеет не только декоративную функцию, но и практическую. Его установка является само собой разумеющейся операцией при выполнении
									</span>
								</div>
							</div>
							<div class="ab-single-img-1">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ab-single-img-1.png" alt="">
								<div class="ab-sing-img-txt">
									<span>Потолки,</span>
									<span>Варианты</span>
								</div>
							</div>
							<div class="ab-single-wrap">
								
								<div class="ab-single-txt">
									<span>
										<?php the_content() ?> 
									</span>
								</div>
								
								
								
								
								
								
								
								
								
								
								
								
								<div class="az-center2">
									<div class="az-stars">
										<input type="radio" name="radio1" id="a0" class="radio0">
										<input type="radio" name="radio1" id="a1" class="radio1">
										<input type="radio" name="radio1" id="a2" class="radio2">
										<input type="radio" name="radio1" id="a3" class="radio3">
										<input type="radio" name="radio1" id="a4" class="radio4">
										<input type="radio" name="radio1" id="a5" class="radio5">
										<label for="a0" class="az-none"></label>
										<label for="a1" class="label1"></label>
										<label for="a2" class="label2"></label>
										<label for="a3" class="label3"></label>
										<label for="a4" class="label4"></label>
										<label for="a5" class="label5"></label>
									</div>
									<span>Средняя оценка 4.0  оценили уже более 2301 раз</span>
									<div class="clearfix"></div>
								</div>
								<div class="ab-soc-single">
									<span>Поделиться с друзьями или сохранить ссылку</span>
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ab-soc.png" alt="">
								</div><br>
								<?php require_once('includes/vozniklivoprosi.php'); ?>
								<h3 class="ab-stat">Похожие статьи</h3>
								<div class="ab-stat-wrap">
									<div class="ab-stat-box-wrap">
										<div class="ab-stat-box">
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ab-st-1.png" alt=""></a>
											<div class="ab-stat-box-txt">
												<a href="#">Поскольку в процессе строительства<br> не всегда </a><br>
												<a href="#">Реечные потолки</a>
											</div>
										</div>
										<div class="ab-stat-box">
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ab-st-3.png" alt=""></a>
											<div class="ab-stat-box-txt">
												<a href="#">Кожа - необычный и стильный вид<br> отделки потолка</a><br>
												<a href="#">Реечные потолки</a>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="ab-stat-box-wrap">
										<div class="ab-stat-box">
										<div class="ab-line-pro"></div>
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ab-st-2.png" alt=""></a>
											<div class="ab-stat-box-txt">
												<a href="#">Рисунок на потолке поможет<br> украсить интерьер</a><br>
												<a href="#">Реечные потолки</a>
											</div>
										</div>
										<div class="ab-stat-box">
										<div class="ab-line-pro"></div>
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ab-st-4.png" alt=""></a>
											<div class="ab-stat-box-txt">
												<a href="#">Стеклянные полотна перестали<br>считаться неподходящими</a><br>
												<a href="#">Реечные потолки</a>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>	
								<div class="zk_photos_osn">	
									<h3 class="ab-stat ab-stat-2">Видео по теме</h3>
									<div class="zk_videos zk_videos-2 ">			
										<div class="col-md-6">
											<ul class="zk_video">
												<li><a href="#"  ><img src="<?php echo get_template_directory_uri(); ?>/img/video1.png" alt=""></a></li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="zk_video">
												<li><a href="#" class="zk_video"><img src="<?php echo get_template_directory_uri(); ?>/img/video2.png" alt=""></a></li>
											</ul>	
										</div>
									</div>	
									<div class="clearfix"></div>   
								</div>
								<?php require_once('includes/tovari-single.php'); ?>
								<h3 class="ab-stat comments">Комментарии</h3>
								<div class="ab-italic-comments">
									<span>Комментариев пока к сожалению нет, но вы могли бы быть первым ...</span>
								</div>
								<div class="ab-publish">
									<span>Александр Опубликовано 20.01.2016</span>
								</div>
							</div>
							<div class="ab-single-wrap ab-single-wrap-2">
								<div class="ab-single-txt">
									<span>
										Деревянные галтели фиксируются на крепежных элементах, закрепляемых на стене. Для них также отмеряется нужное расстояние от натяжного потолка. После установки крепежных элементов к ним прибивается непосредственно плинтус.
									</span>

								</div>
								<div class="az-center3">
									<div class="az-stars">
										<input type="radio" name="radio1" id="a18" class="radio0">
										<input type="radio" name="radio1" id="a19" class="radio1">
										<input type="radio" name="radio1" id="a20" class="radio2">
										<input type="radio" name="radio1" id="a21" class="radio3">
										<input type="radio" name="radio1" id="a22" class="radio4">
										<input type="radio" name="radio1" id="a23" class="radio5">
										<label for="a18" class="az-none"></label>
										<label for="a19" class="label1"></label>
										<label for="a20" class="label2"></label>
										<label for="a21" class="label3"></label>
										<label for="a22" class="label4"></label>
										<label for="a23" class="label5"></label>
									</div>
	
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ab-single-wrap .ab-single-wrap-10">
								<div class="ab-publish ab-publish-2">
									<span>Виктория Фамина Опубликовано 20.01.2016</span>
								</div>
							</div>
							<div class="ab-single-wrap ab-single-wrap-2">
								<div class="ab-single-txt">
									<span>
										Полиуретановые изделия используются очень часто. Они достаточно гибкие и долговечные. Но есть у них и недостатки — это их вес и небольшая толщина, т.е. будет меньше площадь шва.
									</span>
								</div>
								<div class="az-center3">
									<div class="az-stars">
										<input type="radio" name="radio1" id="a12" class="radio0">
										<input type="radio" name="radio1" id="a13" class="radio1">
										<input type="radio" name="radio1" id="a14" class="radio2">
										<input type="radio" name="radio1" id="a15" class="radio3">
										<input type="radio" name="radio1" id="a16" class="radio4">
										<input type="radio" name="radio1" id="a17" class="radio5">
										<label for="a12" class="az-none"></label>
										<label for="a13" class="label1"></label>
										<label for="a14" class="label2"></label>
										<label for="a15" class="label3"></label>
										<label for="a16" class="label4"></label>
										<label for="a17" class="label5"></label>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<?php endwhile; ?>
							<div class="ab-single-wrap">
								<div class="row">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="ab-span-input">
											<span>Ваше имя</span>
										</div>
										<div class="vhod-bottom">
											<div class="search-box">
												<form class="ab-f" action="#">
													<label class="ab-first-input">
														<input class="ab-in" type="text" placeholder="floesdesign">
													</label>
												</form>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="ab-span-input">
											<span>Ваше e-mail</span>
										</div>
										<div class="vhod-bottom">
											<div class="search-box">
												<form class="ab-f" action="#">
													<label class="ab-second-input">
														<input class="ab-in" type="text" placeholder="">
													</label>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="ab-podpis">
									<span>Например Саша Викторов</span>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="vhod-bottom vhod-bottom-2">
											<div class="search-box">
												<form class="ab-forma-1" action="#">
													<label>
														<textarea class="ab-ff" placeholder=""></textarea>
													</label>
												</form>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="ab-span-input ab-span-input-2">
											<span>Ваша оценка статьи</span><span>Не обязательно</span>
										</div>
											<div class="az-center az-center2 az-center5">
									<div class="az-stars">
										<input type="radio" name="radio1" id="a6" class="radio0">
										<input type="radio" name="radio1" id="a7" class="radio1">
										<input type="radio" name="radio1" id="a8" class="radio2">
										<input type="radio" name="radio1" id="a9" class="radio3">
										<input type="radio" name="radio1" id="a10" class="radio4">
										<input type="radio" name="radio1" id="a11" class="radio5">
										<label for="a6" class="az-none"></label>
										<label for="a7" class="label1"></label>
										<label for="a8" class="label2"></label>
										<label for="a9" class="label3"></label>
										<label for="a10" class="label4"></label>
										<label for="a11" class="label5"></label>
									</div>
									<div class="clearfix"></div>
								</div>
									</div>
								</div>
							</div>
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

