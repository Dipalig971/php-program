
<?php

class AuthConfig{

  
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "student";
    private $table = "user";
    private $status;
    public function __construct()
    {
        $this->status = mysqli_connect($this->localhost, $this->username, $this->password, $this->database, );
    }
    function signUp($name, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO $this->table (name,email,password) VALUES ('$name','$email','$hash')";
        $insertData = mysqli_query($this->status, $query);
        return $insertData;
    }

    function signIn($email,$password)
    {
        $query = "SELECT * FROM $this->table WHERE email='$email'";
        $selectData = mysqli_query($this->status, $query);
        $data =mysqli_fetch_assoc($selectData);
        $defaultPassword=$data['password'];
        $status = password_verify($password,$defaultPassword);
        return $status;
    }

}
?>
