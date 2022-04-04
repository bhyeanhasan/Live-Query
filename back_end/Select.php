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

    public function Select_table_2()
    {
        $connection = new Connection();
        $connect = $connection->Connect();
        $query = "SELECT * FROM example_table_2";
        $result = mysqli_query($connect,$query);
        $connect->close();
        return $result;
    }

    public function inner_join()
    {
        $connection = new Connection();
        $connect = $connection->Connect();
        $query = "SELECT * FROM example_table_1 INNER JOIN example_table_2 ON example_table_1.id =example_table_2.id ";
        $result = mysqli_query($connect,$query);
        $connect->close();
        return $result;
    }

    public function left_join()
    {
        $connection = new Connection();
        $connect = $connection->Connect();
        $query =   "SELECT example_table_1.id,example_table_1.name,example_table_1.reg,example_table_1.email,example_table_2.cgpa,example_table_2.total_credit
                    FROM example_table_1 LEFT JOIN example_table_2 ON example_table_1.id =example_table_2.id ";
        $result = mysqli_query($connect,$query);
        $connect->close();
        return $result;
    }

    public function right_join()
    {
        $connection = new Connection();
        $connect = $connection->Connect();
        $query = "SELECT * FROM example_table_1 RIGHT JOIN example_table_2 ON example_table_1.id =example_table_2.id ";
        $result = mysqli_query($connect,$query);
        $connect->close();
        return $result;
    }

    public function search($key)
    {
        $connection = new Connection();
        $connect = $connection->Connect();
        $query = "SELECT * FROM example_table_1 WHERE name like '%".$key."%'";
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

