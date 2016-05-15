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
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/grid.css" type="text/css">

</head>
<body id="page2">
	<div class="bg">
<!-- header -->
		<header>
			<div class="menu-odin">
				<div class="main">
					<div class="container_12">
						<div class="wrapper">
							<div class="grid_12">
								<nav class="wrapper">
									<ul class="menu">
										<li><a href="index.php">О нас</a></li>
										<li><a class="active" href="services.php">Сервисы</a></li>
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
			</div>
		</header>

<!-- content -->
		<section id="content">
			<div class="main">
				<div class="container_12">
					<div class="wrapper">
						<article class="grid_9">
							<h3 class="p2">Консультация</h3>
					<div class="wrapper" style="margin-bottom:35px;">
							<figure class="img-indent border"><img src="images/page2-img1.jpg" alt="" /></figure>
								<div>
									<h4>Медовый массаж - здоровая кожа! </h4>
									Техника медового массажа заключается в двух циклах- вдавливание меда ладонями и выхода его из кожи. Сначала наносится мед на ладони и переносится на массируемую зону. Постепенно, вдавливаем и отрываем ладони все сильнее и быстрее, как бы вбивая мед в кожу. Первые сеансы болезненны, позже кожа привыкнет к медовому массажу и процедура будет проходить менее болезненно. Лечебно-оздоровительное воздействие медового массажа чрезвычайно многогранно, ведь за счет специфической массажной техники, мед очень быстро впитывается кожей, все биоактивные компоненты меда легко попадают в кровь и включаются в обмен веществ. Медовый массаж интенсивно очищает кожу, восстанавливает нормальную работу всех суставов. Является прекрасной профилактикой умственного и физического утомления, сна.
								</div>
							</div>
						</article>
						<article class="grid_3">
							<h3 class="p2">Услуги</h3>
							<ul class="list-1" style="list-style-type:none">
								<li ><a href="#">Маникюр</a></li>
								<li><a href="#">Забота о волосах</a></li>
								<li><a href="#">Чистка лица</a></li>
								<li><a href="#">Спа массаж</a></li>
								<li><a href="#">Лечение кожи</a></li>
								<li><a href="#">Лечение тела</a></li>
								<li><a href="#">Депиляция</a></li>
								<li><a href="#">Макияж</a></li>
								<li><a href="#">Массажная терапия</a></li>
							</ul>
						</article>
					</div>
				</div>
			</div>
		</section>
	</div>


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
