<!DOCTYPE html>
<html>
	<head>
		<?php require_once ('/elements/head.php'); ?>
	</head>
<body>
	<?php require_once ('/elements/top.php'); ?>

	<main>
		<form class="form" id="callback" action="class/mail.php" method="post">
			<p>
				<input type="text" name="name" class="feedback-input" required="" placeholder="Имя" id="name" autocomplete="off" value=''>
				<!-- <div class="error-name" style="color:red; display: none;">Введите имя</div> -->
			</p>
			<p>
				<input type="email" name="email" class="feedback-input" required="" placeholder="Email" id="email" autocomplete="off" value=''>
				<!-- <div class="error-email" style="color:red; display: none;">Введите email</div> -->
			</p>
			<p><textarea type="text" name="comment" id="comment" placeholder="Комментарий" class="feedback-input"></textarea></p>
			<input type="submit" value="отправить" class="button-submit" name="btn-start">
			<div class="ease"></div>
		</form>
	</main>

	<?php require_once ('/elements/scripts.php')?>
	<?php require_once ('/elements/footer.php'); ?>
</body>
</html>	