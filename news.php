<!DOCTYPE html>
<html>
	<head>
		<?php require_once ('/elements/head.php'); ?>
	</head>
<body>
	<?php require_once ('/elements/top.php'); ?>

	<main>		
		<?php
			require ('class/select.php');
		?>
		<?php
			if(mysql_num_rows($qr_result) > 0) {
				$item = mysql_fetch_array($qr_result);

				do {

					echo '
						<div class="blog-container">
							<div class="blok-header">
								<div class="blog-cover"></div>
							</div>
							<div class="blog-body">
								<div class="blog-title">
									<h1><a href="/item.php?id='.$item['id'].'">'.$item['title'].'</a></h1>
								</div>
								<div class="blog-text">
									<p>'.$item['preview'].'</p>
								</div>
								<!-- <div class="blog-tags">
									<ul>
										<li><a href="#">Lorem</a></li>
										<li><a href="#">ipsum</a></li>
										<li><a href="#">dolor</a></li>
										<li><a href="#">sit</a></li>
									</ul>
								</div> -->
							</div>
							<div class="blog-footer">
								<ul>
									<li class="pub-date">'.$item['date'].'</li>
								</ul>
							</div>
						</div>
					';

				} while ($item = mysql_fetch_array($qr_result));
			}
		?>
		
	</main>

	<?php require_once ('/elements/scripts.php')?>
	<?php require_once ('/elements/footer.php'); ?>
</body>
</html>	