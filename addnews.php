<!DOCTYPE html>
<html>
	<head>
		<?php require_once ('/elements/head.php'); ?>
	</head>
<body>
	<?php require_once ('/elements/top.php'); ?>

	<main>
		<form class="form" id="addnews" action="class/news.php" method="post">
			<p>
				<input type="text" name="title" class="feedback-input" required="" placeholder="Название новости" id="title" autocomplete="off" value=''>
			</p>
			<p>
				<input type="text" name="preview" class="feedback-input" required="" placeholder="Краткое описание новости" id="preview" autocomplete="off" value=''>
			</p>
			<p><textarea type="text" name="textnews" id="textnews" required="" placeholder="Подробный текст новости" class="feedback-input"></textarea></p>
			<input type="submit" value="сохранить" class="button-submit">
			<div class="ease"></div>
		</form>
	</main>

	<?php require_once ('/elements/scripts.php')?>
	<?php require_once ('/elements/footer.php'); ?>
</body>
</html>	