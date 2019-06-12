<?php
namespace models;

class Dbconnect
{
    protected $host='localhost';
    protected $database='';
    protected $user='';
    protected $password='';
    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database)
        or die("Ошибка " . mysqli_error($link));
    }
}



?>