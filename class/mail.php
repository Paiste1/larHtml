<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["comment"];

if (isset($name) && isset($email)) {

	$db_host = "localhost";
	$db_user = "Alex";
	$db_pass = "12345";
	$db_base = "AP";
	$db_table = "Recall";

	$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_base);

	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (name,email,comment) VALUES ('$name','$email','$text')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }

}

$time = date( 'D, d M Y H:i:s', strtotime("+5 hour"));

if (isset($_POST["btn-start"])) {
	$to = "alexpaiste.ap@gmail.com";
	$subject = "Обратная связь";
	$charset = "utf-8";
	$headerss ="Content-type: text/html; charset=$charset\r\n";
	$headerss.="MIME-Version: 1.0\r\n";
	$headerss.= $time."\r\n";
	$msg = "Имя: ".$name."\n";
	$msg .= "Email: ".$email."\n";
	$msg .= "Сообщение: ".$text."\n";

	$send = mail($to, $subject, $msg, $headerss);

	if($send == true) {
		print "<script>alert(\"Сообщение успешно отправлено!\"); window.location = window.location.href = '/';</script>";
	} else {
		print "<script>alert(\"Сообщение не отправлено! Что-то пошло не так!\"); window.location = window.location.href = '/';</script>";
	}

}
