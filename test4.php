$conn = mysqli_connect("127.0.0.1", "root", "1234", "highscores");

$insert_query = "INSERT INTO scores(name, score) VALUES('JUNG', 60)";
mysqli_query($conn, $insert_query);

mysqli_close($conn);