<?php
include 'Connection.php';
$connection = new Connection();
$connect = $connection->Connect();

$id= $_POST['id'];
$reg= $_POST['reg'];
$name= $_POST['name'];
$email= $_POST['email'];

$query = "insert into example_table_1  (id,reg,name,email) values ('".$id."', '".$reg."','".$name."','".$email."')";

mysqli_query($connect, $query);

$connect->close();
header("Location: ../index.php");
?>
