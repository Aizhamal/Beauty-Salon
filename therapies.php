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
<body id="page3">
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
										<li><a class="active" href="therapies.php">Терапии</a></li>
										<li><a href="staff.php">Работники</a></li>
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
					<div class="wrapper">
						<article class="grid_12">
							<h3 class="p2">Терапия</h3>
							<a href="add-therapy.php"><button type="button" class = "button" name="button">Добавить терапию</button></a>
							<div class="wrapper p4">


								<div class="grid_4 alpha">
									<div class="wrapper p2">
										<figure class="border fleft"><img src="images/page3-img1.jpg" alt="" /></figure>
									</div>
									<h6 style="margin-bottom:10px;"><a class="link" style="color:pink" href="#">ВАННА С ЛЕПЕСТКАМИ РОЗ И РОЗОВЫМ МАСЛОМ</a></h6>
									<p style="margin-bottom:35px;">Устройте себе праздник! Такая ванна снимает любой стресс, усталость, депрессию, возвращает молодость, тонизирует и настраивает на романтический лад!</p>

								</div>

								<div class="grid_4">
									<div class="indent-left3">
										<div class="wrapper p2">
											<figure class="border fleft"><img src="images/page3-img2.jpg" alt="" /></figure>
										</div>
										<h6 class="prev-indent-bot"><a class="link" href="#" style="color:pink">ВАННА С МОЛОКОМ</a></h6>
										<p style="margin-bottom:35px;">Ванны с молоком, благодаря особым кислотам, содержащимся в нем, очищают кожу от загрязнений и отмерших клеток, одновременно придавая ей мягкость и нежность. смягчающие: лимон, жожоба, апельсин, миндаль.</p>

									</div>
								</div>
								<div class="grid_4 omega">
									<div class="indent-left2">
										<div class="wrapper p2">
											<figure class="border fleft"><img width="230px" height="190px" src="images/page3-img3.jpg" alt="" /></figure>
										</div>
										<h6 style="margin-bottom:10px;"><a class="link" style="color:pink" href="#">ВАННЫ С ОТРУБЯМИ</a></h6>
										<p style="margin-bottom:35px;">Ванны с отрубями улучшают состояние кожи, делают ее нежнее и мягче, за счет большого содержания витаминов группы B. Такие ванны хорошо подходят для воспаленной и проблемной кожи. - успокаивающие: пихта, иланг-иланг, лаванда - противоспалительные: герань, лимон, пачули.</p>

									</div>
								</div>


								<?php
								include "connection.php";
								$query = "SELECT * FROM therapy";
								$res = $con->query($query);
								while($row=$res->fetch_array()){
								?>
								<div class="grid_4 alpha">
									<div class="wrapper p2">
										<figure class="border fleft"><img  style="width:200px;height:200px;"src="<?php echo $row['image']?>" alt="" /></figure>
									</div>
										<h6 style="margin-bottom:10px;"><a class="link" style="color:pink" href="#"><?php echo $row['name']?></a></h6>
										<p style="margin-bottom:35px;"><?php echo $row['description']?></p>
										<h6 style="margin-bottom:10px;"><a class="link" style="color:pink" href="deleteTherapy.php?id=<?php echo $row['therapy_id']?>">Удалить</a></h6>
								</div>
								<?php } ?>
							</div>



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
