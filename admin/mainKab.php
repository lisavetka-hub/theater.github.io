<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<title>THEATER</title>
<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="style2.css">
</head>
<body>

	<header>
		<div class="header-container">
			<div class="logo">
				<img src="img/LogoTheater.png" alt="logo">
			</div>
			<input type="checkbox" id="menu-checkbox">
			<nav role="navigation">
			<label for="menu-checkbox" class="toggle-button"
			data-open="MENU" data-close="CLOSE" onclick></label>
				<ul class="main-menu">
					<li><a href="mainpage.html">ГЛАВНАЯ</a></li>
					<li><a href="mainProf.html">ПРОФИЛЬ АКТЕРА</a></li>
					<li><a href="mainInformation.html">ИНФОРМАЦИЯ</a></li>
					<li><a href="mainGalery.html">ГАЛЛЕРЕЯ</a></li>
					<li><a href="mainKab.html">ЛИЧНЫЙ КАБИНЕТ</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
		<section class="top-slide">
				<div class="top-container"></div>
		</section>
		
		<section class="attention">
			<div class="attention-container">
				<h2>Личный кабинет</h2>
			</div>
		
		</section>

			<!--<section class="registration">
				<h3>Вход</h3>
					<p><b>Логин</b><br>
					   <input type="text" size="20">
					</p>
					<p><b>Пароль</b><br>
					   <input type="text" size="20">
					</p>
					 <p><input type="submit" value="Отправить"></p>
				<h3>Регистрация</h3>
					<p><b>Фамилия*</b><br>
					   <input type="text" size="20">
					</p>
					<p><b>Имя*</b><br>
					   <input type="text" size="20">
					</p>
					<p><b>Отчество*</b><br>
					   <input type="text" size="20">
					</p>
					<p><b>e-mail*</b><br>
					   <input type="text" size="20">
					</p>
					 <p><b>Телефон*</b><br>
					   <input type="text" size="20">
					</p>
					<p>О себе<Br>
					<textarea name="about-you" cols="22" rows="3"></textarea></p>
					<p><input type="checkbox" />Хочу стать членом групы</p>
					<p><input type="submit" value="Зарегистрироваться"></p>
		</section>-->
																			
							<section class="login">	
								<h2>вход</h2>
								<form id="form" action="#" method="POST">
									<div class="pole">
										<label>Имя пользователя:</label>
										<div class="input"><input type="text"  name="login" /></div>	<!--id="log"-->
									</div>

									<div class="pole">
										<a href="#" id="zab">Забыли пароль?</a>
									<label>Пароль:</label>
										<div class="input"><input type="password" name="password"  /></div>    <!--id="pass"-->
									</div>

									<div class="sub">
										<button type="submit">Войти</button>
										<label id="otmetka"><input type="checkbox" /> Запомнить меня</label>
									</div>
								</form>
							</section>
								
																			
							<section class="registration">
								<h2>Регистрация</h2>							
								<form id="form" action="#" method="POST">
									<div class="pole">
										<label>Имя пользователя:</label>
										<div class="input"><input type="text"  name="login" /></div>	<!--id="log"-->
									</div>

									<div class="pole">
									<label>Пароль:</label>
										<div class="input"><input type="password" name="password"  /></div>    <!--id="pass"-->
									</div>

									<div class="sub">
										<button type="submit">Зарегистрироваться</button>
									</div>
								</form>
							</section>
								
						
						
		
		
		
		
		
	</main>
	
	<footer>
		<div class="footer-container">
			<div class="log-in"><!--блок для создания кнопки-->
				<a href="mainKab.html">Вход / Регистрация</a><!--ссылка на другу страницу-->
				
				
					<div class="button js-button-campaign"><span>Настройки</span></div>
						<div class="overlay js-overlay-campaign">
							<div class="popup js-popup-campaign">
																			
																			
								<form id="form" action="avtorizazia.php" method="POST">
									<div class="pole">
										<label>Имя пользователя:</label>
										<div class="input"><input type="text"  name="login" /></div>	<!--id="log"-->
									</div>

									<div class="pole">
										<a href="#" id="zab">Забыли пароль?</a>
									<label>Пароль:</label>
										<div class="input"><input type="password" name="password"  /></div>    <!--id="pass"-->
									</div>

									<div class="sub">
										<button type="submit">Войти</button>
										<label id="otmetka"><input type="checkbox" /> Запомнить меня</label>
									</div>
								</form>
								
								
								<div class="close-popup js-close-campaign"></div>
							</div>
						</div>
			</div>
			<div class="feedback">
				<h4>Обратная связь</h4>
				<p>http://kalmtaetr.ru/</p>
				<img src="img/email.png" alt="">
				<img src="img/rss.png" alt="">
			</div>
			<div class="contacts">
				<h4>Контактная информация</h4>
				<img src="img/Adress.png" alt=""><p>ул. Ленина, д. 201а, <br>
												Элиста, Респ. Калмыкия </p>
				<img src="img/Phone.png" alt=""><p>89938409075<br>
												+7 (961) 652-95-04 </p>
			</div>
		</div>
	</footer>
	
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="script.js"></script>
</body>
</html>

