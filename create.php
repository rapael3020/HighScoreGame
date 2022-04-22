<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '1234',
  'highscores');
 
$sql = "SELECT * FROM scores";
$result = mysqli_query($conn, $sql);
 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1>Score Test</h1>
    <h3> 이름과 점수를 저장하세요 </h3>
    <form action="process_create.php" method="POST">
      <p><input type="text" name="name" placeholder="이  름 (ex)Harry Porter"></p>
	  Score (between 1 and 500):
      <p><input type="number" name="score" placeholder="점  수  (ex)320"></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
