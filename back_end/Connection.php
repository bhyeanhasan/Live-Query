<?php

class Connection
{
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "live_query";


    public function Connect()
    {
        $connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($connection->connect_error) {
            die("Database Connection Failed: " . $connection->connect_error);
        }

        return $connection;
    }

}

