<?php
$host = 'localhost';
$user = 'root';
$password = '1234';
$database_name = 'highscores';
 
$con = new mysqli($host, $user, $password, $database_name); //connect
if (mysqli_connect_errno($con))
 { echo "MySQL접속 실패: " . mysqli_connect_error(); } //error


 mysqli_set_charset($con,"utf8");
 $res = mysqli_query($con, "select*from highscores"); //db
 $result = array();
 while ($row = mysqli_fetch_array($res)) {
    array_push($result, array('name'=>$row[0],'score'=>$row[1])); //array
 }
 echo json_encode(array("result"=>$result),JSON_UNESCAPED_UNICODE); //json

 mysqli_close($con); //exit
 ?>