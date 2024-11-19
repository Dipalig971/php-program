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
         $this->status=mysqli_connect($this->localhost, $this->username, $this->password, $this->database,);
     
         if($this->status)
         {
             echo "Database connected Successfully !";
         }
     
     }
 
     function insertDatabase($name,$age,$phone)
     {
         $query = "INSERT INTO product (name,age,phone) VALUES ('$name',$age,$phone)";
         $insertData = mysqli_query($this->status,$query);
 
         if($insertData)
         {
             echo "<script>alert('Insert data Successfully!')</script>";
         }
     }
 
     }
 
 ?>