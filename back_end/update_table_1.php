<?php
include 'Connection.php';
$connection = new Connection();
$connect = $connection->Connect();

$id= $_POST['id'];
$reg= $_POST['reg'];
$name= $_POST['name'];
$email= $_POST['email'];

$query = "update  example_table_1  set reg ='".$reg."',name = '".$name."', email='".$email."' where id = '".$id."'";

if (mysqli_query($connect, $query)) {

} else {
    echo mysqli_error($connect);
}

$connect->close();
header("Location: ../index.php");
?>
