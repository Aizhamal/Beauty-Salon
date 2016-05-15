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


</head>
<body id="page4">
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
										<li><a href="services.php">Сервисы</a></li>
										<li><a href="therapies.php">Терапии</a></li>
										<li><a class="active" href="staff.php">Работники</a></li>
										<li><a href="contacts.php">Контакты</a></li>
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
					<div class="wrapper p4">
						<article class="grid_12">
							<h3 class="p2">Наши работники</h3>
							<div class="wrapper p4">
								<figure class="img-indent border"><img src="images/page4-img1.jpg" alt="" /></figure>
								<div>
									<div class="wrapper">
										<h4 class="fleft">Phabchungkung Prapadee</h4>
										<ul class="list-services fright indent-top">

										</ul>
									</div>
									<strong class="text-1 color-3 prev-indent-bot2">Массажист</strong>
									<p>Пхабчунгкунг Прапади (Phabchungkung Prapadee) короткое имя Нумтан.



Мастер, которому одинаково хорошо удаются и мужские, спортивные, силовые, энергичные массажи и СПА программы  глубокой релаксации. Удивительно талантливый и никогда не прекращающий обучение  специалист, очень тонко чувствующий  проблемы пациента</p>

								</div>
							</div>
							<div class="wrapper p4">
								<figure class="img-indent border"><img src="images/page4-img2.jpg" alt="" /></figure>
								<div>
									<div class="wrapper">
										<h4 class="fleft">Phabchungkung Nuthamonta</h4>

											<li><a href="#"></a></li>

										</ul>
									</div>
									<strong class="text-1 color-3 prev-indent-bot2">Массажист</strong>
									<p> Пхабчунгкунг Нутхамонта (Phabchungkung Nuthamonta) короткое имя Натамон.



Изысканный интерьер, чарующая атмосфера,  медитативная музыка и волшебный танец двух рук -  это о Натамон, ее массаже и нашем салоне. Мягкие прикосновения, плавные движения и Ваше путешествие в страну наслаждений началось...</p>

								</div>
							</div>


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
