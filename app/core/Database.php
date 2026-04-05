<?php
class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $db = 'project_crud';
    private $password = "";

    public function connect()
    {
        return new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
    }
}



//can be written as
// $host = 'localhost';
// $user = 'root';
//  $db = 'student_crud';
//  $password = "";

//  $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);