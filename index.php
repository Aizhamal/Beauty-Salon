<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>BEAUTY SALON</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/grid.css" type="text/css">
  <script src="jquery.js" charset="utf-8"></script>
<style media="screen">
.slider{
  z-index: 0;
  width:500px;
  height: 250px;
  margin: 0px auto;
}
.frame{
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.slider .frame ul{
  list-style: none;
  padding: 0;
  margin: 0;
  width: 1500px;
}
.slider .frame ul li{
  width: 500px;
  float: left;
}
.slider .frame ul li img{
  width: 100%;
  height: 250px;
}

</style>
</head>
<body id="page1">
	<div class="bg">

		<header>
			<div class="menu-odin">
				<div class="main">
					<div class="container_12" >
						<div class="wrapper">
							<div class="grid_12">
								<nav class="wrapper">
									<ul class="menu">
										<li><a class="active" href="index.php">О нас</a></li>
										<li><a href="services.php">Сервисы</a></li>
										<li><a href="therapies.php">Терапии</a></li>
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
                <div class="slider">
									<div class="frame">
										<ul class="items">
											<li ><img src="images/19412.jpg" alt=""  /></li>
											<li ><img src="images/lala.jpg" alt="" /></li>
											<li ><img src="images/spa.jpg" alt="" /></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

<!-- content -->
		<section id="content">
      <?php
        if (isset($_SESSION)) {
          if(isset($_SESSION['login'])){?>
            <center>Hello,<strong> <?php echo $_SESSION['login']?></strong></center>
          <?php }
        }
       ?>
			<div class="main">
				<div class="container_12">
					<div class="wrapper">
						<article class="grid_3">
							<p class="lenta">Новости</p>
							<time class="tdate-1" datetime="2016-02-14"><a >14.02.2016</a></time>
							<p class="indent-bot2">День святого Валентина - как устроить романтический вечер </p>
							<time class="tdate-1" datetime="2016-02-17"><a>17.02.2016</a></time>
							<p class="indent-bot2">10 причин посетить «Beauty SPA»</p>
							<time class="tdate-1" datetime="2016-02-20"><a>20.02.2016</a></time>
							Подарочные сертификаты от «Beauty SPA»
						</article>
						<article class="grid_6">
							<div class="indent-left">
								<p class="lenta">Самые популярные процедуры</p>
								<div class="wrapper border-bot " style="margin-bottom:35px;">
									<figure class="img-indent border"><a><img src="images/page1-img1.jpg" alt="" /></a></figure>
									<div>
										<p1></p1>

										Массажная терапия - один из самых главных факторов поддержания красоты и здоровья.
									</div>
								</div>
								<div class="wrapper">
									<figure class="img-indent border"><a><img src="images/page1-img2.jpg" alt="" /></a></figure>
									<div>
										<h4></h4>
										СПА-процедуры для ног.
Красивые ножки – «визитная карточка» женщины, поэтому различные SPA-комплексы для ног стали «мастхэвом» для дам любого возраста.
									</div>
								</div>
							</div>
						</article>
						<article class="grid_3" style="margin-left:10px;">

							<p class="lenta">Наши Сервисы</p>
							<div class="wrapper indent-bot2">
								<div class="extra-wrap">
									<strong class="text-1"><a >Питательный травяной коктейль с глиной</a></strong>
									Глина, сухая травяная смесь (мята, ромашка, липовый цвет, лаванда, шалфей, вода). Время 35 мин.
								</div>
							</div>
							<div class="wrapper indent-bot2">
								<div class="extra-wrap">
									<strong class="text-1"><a>Комплексные процедуры</a></strong>
									Коррекция фигуры от «Beauty SPA»
								</div>
							</div>
							<div class="wrapper">
								<div class="extra-wrap">
									<strong class="text-1"><a >Парения</a></strong>
									Парение в сауне с использованием веников и арома масел обладает мощным оздоровительным эффектом.
								</div>
							</div>
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
					<article class="grid_4">
						<h3 class="p1">Забота о теле</h3>
						<p style="margin-bottom:35px;">В круговерти дел и проблем вы мечтаете об отдыхе?
А до отпуска еще так далеко...
Или, может быть, вы совсем недавно вернулись из теплых стран и мучительно трудно пытаетесь войти в рабочую колею.
Воспоминания все время уносят вас далеко от офиса – в мир расслабленности и беззаботности.</p>

					</article>
					<article class="grid_4">
						<div class="indent-left3">
							<h3 class="p1">Массаж</h3>
							<p style="margin-bottom:35px;">В технику исполнения лечебного массажа входят поглаживание одной (двумя) руками, концентрическое поглаживание преимущественно на суставах округленной формы – коленный, голеностопный, плечевой суставах.
</p>

						</div>
					</article>
					<article class="grid_4">
						<div class="indent-left2">
							<h3 class="p1">VIP</h3>
							<p style="margin-bottom:35px;">VIP караоке, сауна и закрытые вечеринки от «Beauty SPA»</p>

						</div>
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
  <script>
$(document).ready(function(){
  //script for slider
  (function(){
    var current = 0;

    setInterval(function() {
      current++;
      if(current>2)current=0;
      $(".slider .items").animate({"margin-left":-500*current+"px"});
    },1000);
  })();
})
</script>
</body>
</html>
