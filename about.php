<!doctype HTML>
<html>
<head>
    <meta charset="utf-8">
	
	<title>Про сайт</title>
	
	<!-- CSS -->
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<!-- ICON -->
	<link rel="shortcut icon" href="icons/logo1.png" type="image/x-icon">
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon">
</head>

<body>
	<header>
	<div class="headertop">
		<div class="inner">
			<div id="logo"> <a href="index.html"><img src="icons/logo2.png"></a></div>
		</div>
	</div>
	<div class="headerbottom">
		<div class="inner">
			<nav>
				<ul class="topnav">
					<li class="first"><a href="index.php" title="Головна">головна</a></li>
					<li><a href="history.php" title="Історія">історія</a></li>
					<li><a href="school.php" title="Школа">школа</a></li>
					<li><a href="schedule.php" title="Розклад Транспорту">розклад транспорту</a></li>
					<li><a href="map.php" title="Карта">карта</a></li>
					<li><a href="victoria.php" title="ФК Вікторія">фк вікторія</a></li>
					<li class="last current"><a href="about.php" title="Про Сайт">про сайт</a></li>
				</ul>
			</nav>
		</div>
	</div>
	</header>
	
	<!-- CONTENT -->

	<content>
		<div class="content">
			<h1>Інформація про сайт</h1>
			<hr class="topicHR">
			

		</div> <!-- wrapper -->
		
		<!-- SIDEBAR -->

		<div id="sidebar">
			<div id="flag">
			</div>
			<hr>
			<div id="signin">
				<form method="GET">
					<input type="login" name="login" placeholder="Логін"><br>
					<input type="password" name="password" placeholder="Пароль"><br>
					<input type="image" value="Увійти"><br>
					<input type="image" value="Зареєструватись">
				</form>
			</div>
			<hr>
			<div id="social">
				Ми в соц. мережах:<br>
				<a href="https://vk.com/forrwarrd"  target="_blank"><img src="icons/vk.png"></a>
				<a href="https://www.facebook.com/forrwarrd" target="_blank"><img src="icons/fb.png"></a>
				<a href="https://www.instagram.com/forrwardd/" target="_blank"><img src="icons/inst.png"></a>
				<a href="mail.html" target="_blank"><img src="icons/email.png"></a>
			</div>
			<hr>
			<div id="weather">
				Погода у Великих Бірках<br>
				
			</div>
			<hr>
			<div id="calendar">
				Календар<br>
				
			</div>
			<hr>
			<div id="adds">
				Оголошення<br>
				<a href="https://vk.com/forrwarrd"><img src="images/avtozapchasti_vokzal2.gif"></a>
				<a href="https://vk.com/forrwarrd"><img src="images/glavnik2.gif"></a>
				<a href="https://vk.com/forrwarrd"><img src="images/vantaj_golub.gif"></a>
				<a href="https://vk.com/forrwarrd"><img src="images/teakwondo_2015.gif"></a>
			</div>
		</div>
	</content>
	
	<!-- FOOTER -->

	<footer>
		<div id="LFooter"> 
			&copy; <?=date ('Y'); ?>
			<br>
			<a href="index.php">Великі Бірки</a>
		</div>
		<div id="RFooter">
			Зворотній звязок: <br>
			<a href="https://vk.com/forrwarrd"  target="_blank"><img src="icons/vk.png"></a>
			<a href="https://www.facebook.com/forrwarrd" target="_blank"><img src="icons/fb.png"></a>
			<a href="https://www.instagram.com/forrwardd/" target="_blank"><img src="icons/inst.png"></a>
			<a href="mail.html" target="_blank"><img src="icons/email.png"></a>
		</div>
	</footer>
</body>
</html>