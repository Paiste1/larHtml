<?php
	$URI = explode("?", $_SERVER["REQUEST_URI"]);
    $URI = explode("/", $URI[0]);
?>

<?php

	if(!empty($URI[1] == 'contacts.php') || $URI[1] == 'gallery.php' || $URI[1] == 'callback.php' || $URI[1] == 'addnews.php' || $URI[1] == 'item.php') { ?>
		<style type="text/css">
			.footer {
				position: absolute;
				bottom: 0;
				left: 0;
			}
		</style>
<? 
	} 
?>

<footer class="footer">
	<nav>
		<a href="gallery.php">Галерея</a>
		<a href="news.php">Новости</a>
		<a href="about.php">О Нас</a>
		<a href="contacts.php">Контакты</a>
		<a href="callback.php">Обратная связь</a>
		<a href="enter.php">Войти</a>
	</nav>
	<!-- <div class="logo">
		<a href="/"><img class="graphic-logo" src="/files/img/logo.png" alt=""></a>
	</div> -->
	<div class="social">
		<a href="#"><img src="/files/img/em.png"></a>
		<a href="#"><img src="/files/img/face.png"></a>
		<a href="#"><img src="/files/img/goo.png"></a>
		<a href="#"><img src="/files/img/inst.png"></a>
		<a href="addnews.php"><img src="/files/img/pint.png" alt="Добавить новость"></a>
	</div>	
	<p>Разработка: AlexPaiste . 2019</p>
</footer>