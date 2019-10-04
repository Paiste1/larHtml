<!DOCTYPE html>
<html>
	<head>
		<?php require_once ('/elements/head.php'); ?>
	</head>
<body>
	<?php require_once ('/elements/top.php'); ?>

	<main style="min-height: 554px;">		
		<div class="fulle">
			<div class="buttons">
				<a href="#" class="au">Авторизация</a>
				<a href="#" class="re">Регистрация</a>
			</div>
			<div class="forma auth">
				<h1>Авторизация</h1>
				<form>
					<input type="text" name="login" autocomplete="off" placeholder="Логин">
					<input type="password" name="password" placeholder="Пароль">
					<input type="submit" class="saba" name="submit" value="Войти">
				</form>
			</div>
			<div class="forma reg" style="display: none;">
				<h1>Регистрация</h1>
				<form>
					<input type="text" name="login" autocomplete="off" placeholder="Логин">
					<input type="password" name="password" placeholder="Пароль">
					<input type="password2" name="password2" placeholder="Повторите пароль">
					<input type="submit" class="saba" name="submit-reg" value="Зарегистрироваться">
				</form>
			</div>
		</div>
	</main>

	<?php require_once ('/elements/scripts.php')?>
	<?php require_once ('/elements/footer.php'); ?>
</body>
</html>	