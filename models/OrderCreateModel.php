<?php
namespace models;



Class OrderCreateModel extends Dbconnect
{
    public function __construct($name,$sername,$phone,$email,$town,$summ)
    {
        parent::__construct();
        $query ="INSERT INTO orders (`name`,`sername`,`phone`,`email`,`town`,`summ`) VALUES ('$name','$sername',$phone,'$email','$town',$summ)";
        $result = mysqli_query($this->link, $query) or die("Error " . mysqli_error($this->link));
        mysqli_close($this->link);


    }
}




?>