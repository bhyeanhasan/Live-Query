<?php
include 'Connection.php';
class Select
{
    public function Select_table_1()
    {
        $connection = new Connection();
        $connect = $connection->Connect();
        $query = "SELECT * FROM example_table_1";
        $result = mysqli_query($connect,$query);
        $connect->close();
        return $result;
    }

}
?>

