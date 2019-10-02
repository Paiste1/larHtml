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

			$id = trim($_GET['id']);
		?>
		 <?php

		 $result1 = mysql_query("SELECT * FROM News WHERE id='{$id}'", $connect_to_db);
			if(mysql_num_rows($result1) > 0) {
				$it = mysql_fetch_array($result1);

				do {

					echo '
					<div class="about_container">
						<h2>'.$it['title'].'</h2>
						<div class="textnews">
							<p>'.$it['textnews'].'</p>
						</div>
					</div>
					';

				} while ($item = mysql_fetch_array($result1));
			}
		?> 
		
	</main>

	<?php require_once ('/elements/scripts.php')?>
	<?php require_once ('/elements/footer.php'); ?>
</body>
</html>	