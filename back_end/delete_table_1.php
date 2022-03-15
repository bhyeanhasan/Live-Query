<?php
include 'Connection.php';
$connection = new Connection();
$connect = $connection->Connect();

$id= $_POST['id'];

$query = "delete from  example_table_1  where id = '".$id."'";

if (mysqli_query($connect, $query)) {

} else {
    echo mysqli_error($connect);
}

$connect->close();
header("Location: ../index.php");
?>
