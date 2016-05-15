<?php
session_start();
if(!isset($_SESSION['login'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<script src="http://maps.googleapis.com/maps/api/js">
	</script>
	<script>
	var myCenter=new google.maps.LatLng(43.2551,76.9126);
	function initialize()
	{
	var mapProp = {
	center:myCenter,
	zoom:15,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};

	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

	var marker=new google.maps.Marker({
	position:myCenter,
	});
	marker.setMap(map);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body id="page6">
	<div class="bg">
<!-- header -->
		<header>
			<div class="menu-odin">
				<div class="main">
					<div class="container_12">
						<div class="wrapper">
							<div class="grid_12" >
								<nav class="wrapper">
									<ul class="menu">
										<li><a href="index.php">О нас</a></li>
										<li><a href="services.php">Сервисы</a></li>
										<li><a href="therapies.php">Терапии</a></li>
										<li><a href="staff.php">Работники</a></li>
										<li><a class="active" href="contacts.php">Контакты</a></li>
										<?php
											if(isset($_SESSION)) {
												if(isset($_SESSION['login'])){ ?>
													<li class="last-item"><a href="log-out.php">Выход</a></li>
												<?php

											}else{
												?>
												<li class="last-item"><a href="log-page.php">Авторизация</a></li>
												<?php
											}
										}
										?>
									</ul>
								</nav>
								<h1><a href="index.php"><div id="logo"></div></a></h1>
							</div>
						</div>
					</div>
					</div>
		</header>

<!-- content -->
		<section id="content">
			<div class="main">
				<div class="container_12">
					<div class="wrapper">
						<article class="grid_8">
							<h3 class="p2">Заполнить данные</h3>
							<form id="contact-form" method="post" enctype="multipart/form-data">
								<fieldset>
									  <label><span class="text-form">Ваше имя:</span><input name="p1" type="text" /></label>
									  <label><span class="text-form">Ваш Email:</span><input name="p2" type="text" /></label>
									  <label><span class="text-form">Тема:</span><input name="p3" type="text" /></label>
									  <div class="wrapper">
									  	<div class="text-form">Ваше сообщение:</div>
										<div>
											<textarea style="width:450px"></textarea>
											<div class="clear"></div>
											<div class="buttons">
												<a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Сбросить</a>
												<a class="button" href="#">Отправить сообщение</a>
											</div>
										</div>
									  </div>
								</fieldset>
							</form>
						</article>
						<article class="grid_4">
							<h3 class="p2">Адрес</h3>

						<div id="googleMap" style="width:300px;height:280px;background-image: url('images/map.jpg');"></div>
								<p><strong>г. Алматы, ул. Толе би 65</strong></p>
								<p><strong>Телефон:</strong>+7 727 376 14 55</p>
								<p><strong>Факс:</strong>+7 727 376 14 56</p>
								<p><strong>E-mail:</strong> <a href="#">aizha.a@mail.ru</a></p>
						</article>
					</div>
				</div>
			</div>
		</section>
	</div>

<!-- aside -->
	<aside>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_12">
						<h3 class="p1">Информация</h3>
						Гостевой домик в экологически чистом районе, приглашает Вас отдохнуть и приятно провести время! Аккуратный, уютный коттедж, легкая доступность, возможность проведения различных торжеств, корпоративных вечеров, семейный отдых. Мы ценим наших клиентов, и стараемся предоставить каждому посетителю высокий уровень сервиса и обслуживания, поэтому посещение нашего коттеджа и сауны подарит Вам ни с чем не сравнимые ощущения. В Вашем распоряжении уютная спа зона с большим бассейном, банкет до 15 человек, русская баня, комнаты отдыха, TV, Wifi интернет, профессиональное – система караоке, мангал и летник на улице. Профессиональные повара Казахская Грузинская Европейская Восточная Китайская кухня. Мы всегда рады видеть у нас любителей комфортного отдыха! Возможно как посуточное бронирование от 500-800$, так и почасовое. Справки по телефонам: 263-60-33 354-16-72, 8 775 792 53 62
					</article>
				</div>
			</div>
		</div>
	</aside>

<!-- footer -->
	<footer>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_8">
						<div class="footer-text">
							<b><strong>Beauty SPA</strong> Наши контакты:
								Оздоровительный центр красоты и гармонии «Beauty SPA»</b> <a>Адрес: г. Алматы, ул. Ньютона 7</a>
						</div>

					</div>
					<div class="grid_4">
						<div style="font-size:20px;">
							<strong>Бесплатный звонок:</strong>
							<b>8(727)376-14-55</b>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
