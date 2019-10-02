<?php

  // $host = 'localhost';  // Хост, у нас все локально
  // $user = 'Alex';    // Имя созданного вами пользователя
  // $pass = '12345'; // Установленный вами пароль пользователю
  // $db_name = 'AP';   // Имя базы данных
  // $db_table = 'News';
  // $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

  // // Ругаемся, если соединение установить не удалось
  // if (!$link) {
  //   echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
  //   exit;
  // }

  // // выбираем все значения из таблицы "student"
  // $qr_result = mysql_query("select * from " . $db_table)
  // or die(mysql_error());

  // $data = mysql_fetch_array($qr_result);

// определяем начальные данные
    $db_host = 'localhost';
    $db_name = 'AP';
    $db_username = 'root';
    #$db_password = '';
    $db_table_to_show = 'News';

    // соединяемся с сервером базы данных
    $connect_to_db = mysql_connect($db_host, $db_username, $db_password)
    or die("Could not connect: " . mysql_error());

    // подключаемся к базе данных
    mysql_select_db($db_name, $connect_to_db)
    or die("Could not select DB: " . mysql_error());

    // выбираем все значения из таблицы "News"
    $qr_result = mysql_query("SELECT * FROM " . $db_table_to_show)
    or die(mysql_error());