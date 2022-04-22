<?php





$conn = mysqli_connect("localhost","root","1234","highscores");



// DB 연결이 잘 되었는지 확인

if ( mysqli_connect_errno() )

{

echo "DB 연결에 실패했습니다 " . mysqli_connect_error();

}



// 쿼리가 제대로 실행되었는지 확인



if ( !mysqli_query ($conn," INSERT INTO scores (name, score) VALUES ('jackson',140)") )

{

echo("쿼리오류 발생: " . mysqli_error($conn));

}



mysqli_close($conn);



?>

