<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
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
												<li class="last-item"><a class="active" href="log-page.php">Авторизация</a></li>
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
      <form class="" action="log.php" method="GET">
      <table>
      <tr>
          <td>
              <label for="">Login</label>
          </td>
          <td>
              <input type="text" name="login" value=""><br>
          </td>
        </tr>
        <tr>
        <td>
            <label for="">Password</label>
        </td>
        <td>
            <input type="password" name="password" value=""><br>
        </td>
      </tr>
      <tr>
        <td  colspan="2" style="text-align:center">
          <input type="submit" name="submit" class="button" value="Авторизоваться" style="font-size:15px;">
        </td>
      </tr>
      <tr>
        <td  colspan="2" style="text-align:center">
          <a href="reg-page.php"><button type="button" name="button" class="button" >Регистрация</button></a>
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
