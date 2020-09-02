<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Css/main.css">
		<title>Регистрация</title>
		<body>
			<header class="header">
				<div class="container">
					<div class="header__inner"></div>
					<div class="header__logo">ITRefil</div>
				<div id="nav">
						<a class="nav__link" href="index.php">ITRefil</a>
						<a class="nav__link" href="contact.php">Контактная информация</a>
						<a class="nav__link" href="remont-noutbukov.php">Ремонт ноутбуков</a>
						<a class="nav__link" href="remont-noutbukov.php">Ремонт ПК</a>
						<a class="nav__link" href="reg.php">Регистрация</a>
						<a class="nav__link" href="login.php">Вход</a>
					</div>
					<div class="h1__logo">Регистрационная форма</div>
		<form class="reg-form" action="index.php" method="get">
			<div class="form-row">
				<label for="">Имя пользователя</label>
					<input type="text" name="user">
			</div>
			<div class="form-row">
					<label for="">Пароль</label>
					<input type="password" name="password"/>
			</div>
			<div class="form-row">
					<label for="">Повтор пароля</label>
					<input type="password" name="password"/>
			</div>
			<div class="form-row">
					<label for="">Электронная почта</label>
					<input type="email" name="email"/>

			</div>
			<div class="form-row">
					<label for="">Номер телефона</label>
					<input type="text" id="form_phone" name="phone" />

			</div>
			<div class="form-row">
				<input type="submit" value="Зарегистрироваться">
			</div>
		</form>
				</div>
			</header>
		</body>
	</head>
</html>