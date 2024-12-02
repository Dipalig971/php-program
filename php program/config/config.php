<?php

class Config
{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "student";
    private $status;

    public function connectDatabase()
    {
        $this->status = mysqli_connect($this->localhost, $this->username, $this->password, $this->database, );
    }

    public function insertDatabase($name, $age, $phone) {
       
        $query = "INSERT INTO product (name, age, phone) VALUES ('$name', '$age', $phone)";
        $insertData = mysqli_query($this->status, $query);
        
        return $insertData;
    
    }

    function selectDatabase()
    {
        $query = "SELECT * FROM product";

        $selectData = mysqli_query($this->status, $query);

        return $selectData;
    }
    function updateDatabase($id,$name, $age, $phone){
        $query = "UPDATE product SET name = '$name', age = '$age', phone =$phone WHERE id=$id";
        $updateData = mysqli_query($this->status, $query);
        return $updateData;
    }

    function deleteDatabase($id){
        $query = "DELETE FROM product WHERE id=$id";
        $deleteData = mysqli_query($this->status, $query);
        return $deleteData;
    }
}