<?php
namespace models;



class OrdersGetModel extends Dbconnect
{
    public $orders=array();
    public function __construct($query)
    {
        parent::__construct();
        $query ="SELECT * FROM orders".' '.$query;
        $result = mysqli_query($this->link, $query) or die("Error " . mysqli_error($this->link));
        $i=0;
        while( $row = mysqli_fetch_assoc($result))
        {

            $this->orders[$i]=array('id'=>$row['id'],'name'=>$row['name'],'sername'=>$row['sername'],'phone'=>$row['phone'],'email'=>$row['email'],'town'=>$row['town'],'summ'=>$row['summ']);
            $i++;
        }
        mysqli_close($this->link);
        return $this->orders;
    }
}






?>