<?php
session_start();
if(!isset($_SESSION['login'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Добавление терапии</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/grid.css" type="text/css">
  <style media="screen">
    .reg-main{
    	margin: 0px auto;
    	width: 30%;
    	height: 500px;
    }
    .reg-main label{
      font-size: 20px;
    }
    .reg-main input{
      width: 150px;
      height: 30px;
      font-size: 20px;
    }
    .reg-main input:active{
      box-shadow: 0 0 10px rgba(0,0,0,0.5);

    }
    table{
      width: 100%;
    }
    table td:first-child{
      width: 70%;
      height: 50px;
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
										<li><a href="index.php">О нас</a></li>
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

								<h1><a href="index.php"><div id="logo"></div></a></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

    <div class="reg-main">
      <form class="" action="add.php" method="post" enctype="multipart/form-data">
      <table>
      <tr>
          <td>
              <label for="">Название</label>
          </td>
          <td>
              <input type="text" name="name" value=""><br>
          </td>
        </tr>
        <tr>
        <td>
            <label for="">Описание</label>
        </td>
        <td>
             <textarea name="desc" rows="8" cols="40"></textarea>
        </td>
      </tr>
      <tr>
      <td>
          <label for="">Фотография</label>
      </td>
      <td>
           <input type="file" name="img" value="" style="font-size:15px;width:300px;">
      </td>
    </tr>
      <tr>
        <td  colspan="2" style="text-align:center">
          <input type="submit" name="submit" class="button" value="Добавить" style="font-size:15px;">
        </td>
      </tr>
      </table>
      </form>

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
