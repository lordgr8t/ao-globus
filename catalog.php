<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS Home</title>

	<script
	src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous"></script>
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="shortcut icon" type="image/png" href="favicon.png"/>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media2.css">
</head>
<body>

	<?php require_once('html/navigation_DEV.html'); ?> 

	<!-- header -->
	<?php require_once('html/header.html'); ?>



	<!-- CATALOG grid PAGE -->

	<div class="container">
		<div class="l_tegs mt-3">
			<span><a href="index.html">Главная</a></span>
			<span>></span>
			<span><a href="#">Офисные пренодлежности</a></span>
		</div>
		<div class="d-flex justify-content-between">
			<div class="about_title text-body mt-3 mb-5">Офисные пренодлежности</div>
			<div class="d-flex justify-content-between">
				<img class="mr-2 adaptation_none listpick" src="img/list_active.svg">
				<img class="adaptation_none gridpick" src="img/grid_active.svg" >
			</div>
		</div>
		<div class="adaptation_flex filtpicker mb-3" style="display: none;">
			<div id="opencatalog">
				<span><img src="img/catalog/list_a.svg"></span>Каталог<span></span>
			</div>
			<div id="openfilters">
				<span><img src="img/catalog/filter_a.svg"></span>Фильтры<span></span>
			</div>
		</div>

		<div class="catalog_full" id="catalog_full" style="display: none;">
			<div class="dropdown-menu_test">
				<ul class="main-item">
					<li class="item_test pt-2 pb-2 d-flex justify-content-between" id="close_catalogfull">
						<span>Каталог</span><span class="w-25">Закрыть</span>
					</li>
					<li class="item_test">
						<span>Чертежные принадлежности</span>
						<i class="fa fa-angle-up" aria-hidden="true"></i>
						<ul class="submain none">
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem mb-4">
								Товар категории
							</li>
						</ul>
					</li>
					<li class="item_test">
						<span>Офисные принадлежности</span>
						<i class="fa fa-angle-up" aria-hidden="true"></i>
						<ul class="submain none">
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem mb-4">
								Товар категории
							</li>
						</ul>
					</li>
					<li class="item_test">
						<span>Школьные принадлежности</span>
						<i class="fa fa-angle-up" aria-hidden="true"></i>
						<ul class="submain none">
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem mb-4">
								Товар категории
							</li>

						</ul>
					</li>
					<li class="item_test">
						<span>Товары для творчества</span>
						<i class="fa fa-angle-up" aria-hidden="true"></i>
						<ul class="submain none">
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem">
								Товар категории
							</li>
							<li class="subitem mb-4">
								Товар категории
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

		<div class="filters_full" id="filters_full" style="display: none;">
			<div class="dropdown-menu_test">
				<ul class="main-item">
					<li class="item_test pt-2 pb-2 d-flex justify-content-between" id="close_filters_full">
						<span>Фильтр</span><span class="w-25">Закрыть</span>
					</li>
					<li class="item_test">
						<span>Длина</span>
						<i class="fa fa-angle-up" aria-hidden="true"></i>
						<ul class="submain none">
							<li class="subitem">
								<p><input type="checkbox" checked value="Idc">N</p>
							</li>
							<li class="subitem">
								<p><input type="checkbox"  value="">N</p>
							</li>
							<li class="subitem">
								<p><input type="checkbox"  value="">N</p>
							</li>
						</ul>
					</li>
					<li class="item_test">
						<span>Цена</span>
						<i class="fa fa-angle-up" aria-hidden="true"></i>
						<ul class="submain none">
							<li class="subitem range_subitem">
								<div class="middle">
									<div class="multi-range-slider">
										<input type="range" id="input-left" min="0" max="860" value="235">
										<input type="range" id="input-right" min="0" max="860" value="860">
										<div class="slider">
											<div class="track"></div>
											<div class="range"></div>
											<div class="thumb left"></div>
											<div class=" krug krug_left"></div>
											<div class="thumb right"></div>
											<div class="krug krug_right"></div>
										</div>
									</div>
								</div>
								<div class="price_range d-flex justify-content-between">
									<p class="min_value">0</p>
									<p class="max_value">0</p>
								</div>	
							</li>
						</ul>
					</li>
					<li class="item_test">
						<span>Толщина</span>
						<i class="fa fa-angle-up" aria-hidden="true"></i>
						<ul class="submain none">
							<li class="subitem">
								<p><input type="checkbox" checked value="Idc">N</p>
							</li>
							<li class="subitem">
								<p><input type="checkbox"  value="">N</p>
							</li>
							<li class="subitem mb-4">
								<p><input type="checkbox"  value="">N</p>
							</li>
						</ul>
					</li>
					<li class="item_test">
						<span>Количество в упаковке</span>
						<i class="fa fa-angle-up" aria-hidden="true"></i>
						<ul class="submain none">
							<li class="subitem">
								<p><input type="checkbox" checked value="Idc">200</p>
							</li>
							<li class="subitem">
								<p><input type="checkbox"  value="">300</p>
							</li>
							<li class="subitem mb-4">
								<p><input type="checkbox"  value="">400</p>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>



		<div class="d-flex justify-content-between">
			<div class="product_filters adaptation_none">
				<div class="product_filters_parameters  mb-4">
					<div class="product_filters_parameters  mb-4">
						<div class="dropdown-menu_test">
							<ul class="main-item">
								<li class="item_test pt-2 pb-2">
									<span>Длина</span>
									<i class="fa fa-angle-up" aria-hidden="true"></i>
									<ul class="submain none">
										<li class="subitem">
											<p><input class="mr-2" type="checkbox" checked value="Idc">N</p>
										</li>
										<li class="subitem">
											<p><input class="mr-2" type="checkbox"  value="">N</p>
										</li>
										<li class="subitem">
											<p><input class="mr-2" type="checkbox"  value="">N</p>
										</li>
									</ul>
								</li>
								<li class="item_test pt-2 pb-2">
									<span>Цена</span>
									<i class="fa fa-angle-up" aria-hidden="true"></i>
									<ul class="submain none">
										<li class="subitem range_subitem">
											<div class="middle">
												<div class="multi-range-slider">
													<input type="range" id="input-left" min="0" max="860" value="235">
													<input type="range" id="input-right" min="0" max="860" value="860">
													<div class="slider">
														<div class="track"></div>
														<div class="range"></div>
														<div class="thumb left"></div>
														<div class=" krug krug_left"></div>
														<div class="thumb right"></div>
														<div class="krug krug_right"></div>
													</div>
												</div>
											</div>
											<div class="price_range d-flex justify-content-between">
												<p class="min_value">0</p>
												<p class="max_value">0</p>
											</div>	
										</li>
									</ul>
								</li>
								<li class="item_test pt-2 pb-2">
									<span>Толщина</span>
									<i class="fa fa-angle-up" aria-hidden="true"></i>
									<ul class="submain none">
										<li class="subitem">
											<p><input class="mr-2" type="checkbox" checked value="Idc">N</p>
										</li>
										<li class="subitem">
											<p><input class="mr-2" type="checkbox"  value="">N</p>
										</li>
										<li class="subitem mb-4">
											<p><input class="mr-2" type="checkbox"  value="">N</p>
										</li>
									</ul>
								</li>
								<li class="item_test pt-2 pb-2">
									<span>Количество в упаковке</span>
									<i class="fa fa-angle-up" aria-hidden="true"></i>
									<ul class="submain none">
										<li class="subitem">
											<p><input class="mr-2" type="checkbox" checked value="Idc">200</p>
										</li>
										<li class="subitem">
											<p><input class="mr-2" type="checkbox"  value="">300</p>
										</li>
										<li class="subitem mb-4">
											<p><input class="mr-2" type="checkbox"  value="">400</p>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="product_filters_categories">
					<div class="dropdown-menu_test">
						<ul class="main-item">
							<li class="item_test pt-2 pb-2">
								<span>Чертежные принадлежности</span>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
								<ul class="submain none">
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem mb-4">
										Товар категории
									</li>

								</ul>
							</li>
							<li class="item_test pt-2 pb-2">
								<span>Офисные принадлежности</span>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
								<ul class="submain none">
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem mb-4">
										Товар категории
									</li>
								</ul>
							</li>
							<li class="item_test pt-2 pb-2">
								<span>Школьные принадлежности</span>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
								<ul class="submain none">
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem mb-4">
										Товар категории
									</li>

								</ul>
							</li>
							<li class="item_test pt-2 pb-2">
								<span>Товары для творчества</span>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
								<ul class="submain none">
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem">
										Товар категории
									</li>
									<li class="subitem mb-4">
										Товар категории
									</li>

								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>


			<div class="product_list_list w-100 ml-4" style="display: none; animation: simprod_item_anim 0.6s;">
				<div class="prod_item_list row">
					<img class="mr-3 mt-2" src="img/product/product1.png" width="77px" height="77px">
					<div class="col-4 nameandstatus">
						<div class="simprod_item_status d-flex justify-content-betwee p-0 m-0 mt-2 mb-1">
							<div class="simprod_item_hit ">Хит</div>
							<div class="simprod_item_new ">Новинка</div>
						</div>
						<div class="prod_item_list_name">Скрепки <br> канцелярские гладкие <br> 22 мм. по 100 шт.</div>
					</div>
					<div class="col-2 simprod_item_price text-center mt-4">320₽/ед.</div>

					<div class="col-4 cart_inner mt-4">
						<div class="cart m-0 d-flex justify-content-between">
							<div class="subtract">
								-
							</div>
							<div class="amount">
								1
							</div>
							<div class="add">
								+
							</div>
							<div class="to-cart">
								В корзину
							</div>
						</div>
					</div>
				</div>
				<script src="js/clone.js"></script>
				<div class="page_picker mt-5 d-flex justify-content-between">
					<a href="#"><div class="pagepicker_btn pagepicker_btn_active">1</div></a>
					<a href="#"><div class="pagepicker_btn">2</div></a>
					<a href="#"><div class="pagepicker_btn">3</div></a>
					<div class="d-flex justify-content-between pplns_d">
						<div class="pp_lns"></div>
						<div class="pp_lns"></div>
						<div class="pp_lns"></div>
					</div>
					<a href="#"><div class="pagepicker_btn pagepicker_btn_lastpage">17</div></a>
				</div>
				


				<span class="about_title mt60">Большоай выбор офисных принадлежностей</span>
				<p>Более 50 лет Открытое Акционерное Общество «ГЛОБУС » является традиционным производителем и поставщиком широкого ассортимента канцелярских товаров и в первую очередь чертежных инструментов школьного и технического назначения: от самых простых до самых сложных.</p>
				<p>Качество изготовления инструментов, выбор используемых материалов обеспечивают их длительную эксплуатацию, удобство в работе и экологическую безопасность. Наряду с постоянным расширением ассортимента и функциональных назначений чертежных наборов, большое внимание уделяется освоению производства новых видов канцелярских товаров, находящих успех у покупателей.</p>
			</div>
			



			<div class=" product_list_grid flex-wrap ml-4" style="animation: simprod_item_anim 0.6s;">
				<div class="row addclone">
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
				</div>
				<div class="row addclone">
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
					<?php require('html/product.html') ?>
				</div>
				
				<div class="page_picker mt-5 d-flex justify-content-between">
					<a href="#"><div class="pagepicker_btn pagepicker_btn_active">1</div></a>
					<a href="#"><div class="pagepicker_btn">2</div></a>
					<a href="#"><div class="pagepicker_btn">3</div></a>
					<div class="d-flex justify-content-between pplns_d">
						<div class="pp_lns"></div>
						<div class="pp_lns"></div>
						<div class="pp_lns"></div>
					</div>
					<a href="#"><div class="pagepicker_btn pagepicker_btn_lastpage">17</div></a>
				</div>
				


				<span class="about_title mt60">Большоай выбор офисных принадлежностей</span>
				<p>Более 50 лет Открытое Акционерное Общество «ГЛОБУС » является традиционным производителем и поставщиком широкого ассортимента канцелярских товаров и в первую очередь чертежных инструментов школьного и технического назначения: от самых простых до самых сложных.</p>
				<p>Качество изготовления инструментов, выбор используемых материалов обеспечивают их длительную эксплуатацию, удобство в работе и экологическую безопасность. Наряду с постоянным расширением ассортимента и функциональных назначений чертежных наборов, большое внимание уделяется освоению производства новых видов канцелярских товаров, находящих успех у покупателей.</p>
			</div>
		</div>
	</div>


	<!-- footer -->
	<?php require_once('html/footer.html') ?>
	
	<script src="js/main.js"></script>



</div>

</body>
</html>