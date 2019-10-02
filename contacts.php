<!DOCTYPE html>
<html>
	<head>
		<?php require_once ('/elements/head.php'); ?>
	</head>
<body>
	<?php require_once ('/elements/top.php'); ?>

	<main>
		<h1>Шнырь-курьер находится в ...</h1>
		<div id="map">
			
		</div>
	</main>

	<?php require_once ('/elements/scripts.php')?>

	 <script>
	// Initialize and add the map
	function initMap() {
	  // The location of Uluru
	  var uluru = {lat: 52.9621722, lng: 106.7881087};
	  // The map, centered at Uluru
	  var map = new google.maps.Map(
	      document.getElementById('map'), {zoom: 4, center: uluru});
	  // The marker, positioned at Uluru
	  var marker = new google.maps.Marker({position: uluru, map: map});
	}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIaXZWqXWS_ti_mYrNzyxH9MjEtMgHOiA&callback=initMap">
    </script>

	<?php require_once ('/elements/footer.php'); ?>
</body>
</html>	