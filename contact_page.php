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

	<!-- contact page -->

	<div class="lowcontainer">
		<div class="l_tegs mt-2 mb-4">
			<span><a href="index.html">Главная</a></span>
			<span class="ml-1 mr-1">></span>
			<span><a href="#">Контакты</a></span>		
		</div>
		<div class="about_title text-body mt-3 mb-4">Контакты</div>
		<div class="d-flex justify-content-between adaptation_block">
			<div class="contact_cols col-6">
				<div class="cont_title">Отдел продаж</div>
				<div class="mb-2"><img src="img/mail.svg" class="mr-2"><span>info@ao-globus.ru</span></div>
				<img src="img/phone.svg" class="mr-2"><span>8 800 555-55-55</span>
			</div>
			<div class="contact_cols col-6">
				<div class="cont_title">Отдел закупок</div>
				<div class="mb-2"><img src="img/mail.svg" class="mr-2"><span>info@ao-globus.ru</span></div>
				<img src="img/phone.svg" class="mr-2"><span>8 800 555-55-55</span>
			</div>
		</div>
		<div class="d-flex justify-content-between adaptation_block">
			<div class="contact_cols col-6">
				<div class="cont_title">Отдел маркетинга</div>
				<div class="mb-2"><img src="img/mail.svg" class="mr-2"><span>info@ao-globus.ru</span></div>
				<img src="img/phone.svg" class="mr-2"><span>8 800 555-55-55</span>
			</div>
			<div class="contact_cols col-6">
				<div class="cont_title">Секретариат</div>
				<div class="mb-2"><img src="img/mail.svg" class="mr-2"><span>info@ao-globus.ru</span></div>
				<img src="img/phone.svg" class="mr-2"><span>8 800 555-55-55</span>
			</div>
		</div>
		<div class="contpage_req mb-5">
			<div class="cont_title adaptation_none">Реквизиты</div>
			<div class="colsspan">
				Открытое акционерное общество "Глобус" <br>
				Россия, 307370, Курская обл., г. Рыльск, ул. Володарского, 136 <br>
				р/с 40702810733270000011  <br>
				Курское ОСБ 8596 г.Курск, Рыльского отд. 3891 <br>
				к/с 30101810300000000606 <br>
				БИК 043807606 <br>
				ИНН 4620000150 <br>
				КПП 462001001 <br>
				ОКОНХ 14327, 14971 <br>
				ОКПО 00225779 
			</div>
			<span><img src="img/logo.svg" width="153"></span>
		</div>

		<div class="contpage_order mb-5">
			<div class="cont_title text-center">Оставить заявку</div>
			<div class="d-flex justify-content-between adaptation_block">
				<div>
					<input class="mt-4" type="email" id="email" placeholder="E-mail"><br>
					<input class="mt-4" type="email" id="email" placeholder="Имя">
				</div>
				<input class="mt-4" type="messege" id="messege_c" placeholder="Сообщение">
			</div>
			<button class="mt-4" type="signin">Отправить</button>
		</div>
	</div>
	<div class="mapsfix">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2001.1225400694286!2d30.354870316209947!3d59.89691567242557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696303b838135c7%3A0x3a237c513cdc035c!2z0JLQvtC70LrQvtCy0YHQutCw0Y8!5e0!3m2!1sru!2sru!4v1596392886588!5m2!1sru!2sru" width="1920" height="440" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<!-- footer -->
	<?php require_once('html/footer.html') ?>
	<script src="js/main.js"></script>
	<script src="js/clone.js"></script>



</div>

</body>
</html>