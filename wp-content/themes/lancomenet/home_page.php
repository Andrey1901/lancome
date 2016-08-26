<?php get_header();
/*
* Template Name: Homepage Template
*/
?>
<!-- Start Main -->
<section class="container-fluid video" id="video">
	<div class="container description-holder clearfix">
		<div class="row">
			<img src="<?php the_field('first_image'); ?>" class="video-img" alt="video">
			<h2><?php the_field('first_title'); ?></h2>
			<div class="text-button-block pull-right">
				<p><?php the_field( 'first_description' ); ?></p>
				<a href="video.html" class="more">подробнее</a>
			</div>
			<div class="cam-holder list-inline">
				<a href="javascript:void(0);">
					внутренние
					<img src="img/cam-1.png" alt="cam-1">
				</a>
				<a href="javascript:void(0);">
					уличные
					<img src="img/cam-2.png" alt="cam-2">
				</a>
			</div>

		</div>
	</div>
</section>
<section class="container-fluid skud" id="skud">
	<div class="container description-holder">
		<div class="row">
			<div class="col-sm-6">
				<h2>СКУД Контроль доступа</h2>
				<p>
					Любое строительство сетей начинается с проектирования.
					В начале первого этапа определяются всевозможные пожелания и требования: масштаб и охват сетей,
					кол-во рабочих мест, В начале первого этапа определяются всевозможные пожелания и требования:
					масштаб и охват сетейинфраструктура здания, бюджет проекта......
				</p>
				<a href="skud.html" class="more">подробнее</a>
			</div>
			<img src="img/skud-img.png" alt="skud-image">
		</div>
	</div>
</section>
<section class="container-fluid issuance" id="main">
	<div class="container description-holder">
		<div class="row">
			<h2>Строительство сетей</h2>
			<p>
				Любое строительство сетей начинается с проектирования. В начале первого этапа определяются всевозможные
				пожелания и требования: масштаб и охват сетей, кол-во рабочих мест, инфраструктура здания, бюджет
				проекта......
			</p>
			<a href="build-web.html" class="more">подробнее</a>
		</div>
	</div>
</section>
<section class="container-fluid pon" id="pon">
	<div class="container description-holder">
		<div class="row">
			<img src="img/pon-img.png" alt="skud-image">
			<div class="pon-holder">
				<h2>pon</h2>
				<p>
					Распределительная сеть доступа PON основана на древовидной волоконно-кабельной архитектуре с
					пассивными оптическими разветвителями на узлах, представляет экономичный способ обеспечить
					широкополосную передачу информации....
				</p>
				<a href="pon.html" class="more">подробнее</a>
			</div>

		</div>
	</div>
</section>
<?php get_footer(); ?>

