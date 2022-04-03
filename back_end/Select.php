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

    public function orderbyASC()
    {
        $connection = new Connection();
        $connect = $connection->Connect();
        $query = "SELECT * FROM example_table_1 ORDER BY id ASC";
        $result = mysqli_query($connect,$query);
        if ($result) {

        } else {
            echo "Error" . $connect->error;
        }
        $connect->close();
        return $result;
    }

    public function orderbyDESC()
    {
        $connection = new Connection();
        $connect = $connection->Connect();
        $query = "SELECT * FROM example_table_1 ORDER BY id DESC";
        $result = mysqli_query($connect,$query);
        if ($result) {

        } else {
            echo "Error" . $connect->error;
        }
        $connect->close();
        return $result;
    }

}
?>

