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
				<a href="#">Авторизация</a>
				<a href="#">Регистрация</a>
			</div>
			<div class="auth">
				<div>
					<form>
						<input type="text" name="login" autocomplete="off" placeholder="Логин">
						<input type="password" name="password" autocomplete="off" placeholder="Пароль">
						<input type="submit" name="submit" value="Войти">
					</form>
				</div>
			</div>
			<div class="reg">
				
			</div>
		</div>
	</main>

	<?php require_once ('/elements/scripts.php')?>
	<?php require_once ('/elements/footer.php'); ?>
</body>
</html>	