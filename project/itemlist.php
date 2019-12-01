<?php
//DB 설정
$db_host = 'localhost';
$db_user = 'userID';
$db_passsword = 'password';
$db_database = 'dbName';

//DB 연결
$connect = mysql_connect($db_host, $db_user, $db_password) or die(mysql_error());
mysql_select_db($db_database, $connect) or die(mysql_error());
mysql_query("SET NAMES 'utf8'", $connect) or die(mysql_error());

//DB에 데이터 입력
$query = "insert into list(cont1, cont2, cont3) values('$val1', '$val2', '$val3')";
$result = mysql_query($query);


?>
