<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '1234',
  'highscores');

 
  $filtered = array(
    'name'=>mysqli_real_escape_string($conn, $_POST['name']),
    'score'=>mysqli_real_escape_string($conn, $_POST['score']),
  );
 
$sql = "
  INSERT INTO topic
    (name, score)
    VALUES(
      '{$filtered['name']}',
      '{$filtered['score']}',
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="create.php">돌아가기</a>';
}
?>
