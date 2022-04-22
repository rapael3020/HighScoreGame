<?php
$hostname='localhost';
$username='root';
$password='1234';
$database='highscores';
$secretKey='1234';

try
{
	$dbh = new PDO('mysql:host='.$hostname.';dbname='.$database,$username,$password);
}
catch(PDOException $e)
{
	echo '<h1>error</h1><pre>',$e->getMessage(),'</pre>';
}

$hash=$_GET['hash'];
$realHash = hash('sha256',$_GET['name'].$_GET['score'].$secretKey);

if($realHash == $hash)
{
	$sth = $dbh->prepare('INSERT INTO scores VALUES (null, :name, :score)');
	try
	{
		$sth->bindParam('.name',$_GET['name'],PDO::PARAM_STR);
		$sth->bindParam('.score',$_GET['score'],PDO::PARAM_INT);
		$sth->execute();
	}
	catch(Exception $e)
	{
		echo '<h1>error</h1><pre>',
		$e->getMessage(),'</pre>';
	}
}
	