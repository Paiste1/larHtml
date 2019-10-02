<?php 

// var_dump($_POST); die;

$title = $_POST["title"];
$preview = $_POST["preview"];
$textnews = $_POST["textnews"];
$time = date( 'd-m-Y');

if (isset($title) && isset($preview) && isset($textnews)) {

	$db_host = "localhost";
	$db_user = "Alex";
	$db_pass = "12345";
	$db_base = "AP";
	$db_table = "News";

	$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_base);

	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (title,preview,textnews,date) VALUES ('$title','$preview','$textnews','$time')");
    
    if ($result == true){
    	print "<script>alert(\"Новость успешно добавлена!\"); window.location = window.location.href = '/';</script>";
    }else{
    	print "<script>alert(\"Не удалось добавить новость, что-то пошло не так!\"); window.location = 'addnews.php';</script>";
    }

}
