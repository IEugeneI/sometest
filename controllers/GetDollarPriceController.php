<?php
namespace controllers;


class GetDollarPriceController
{
    public $price;
    public function __construct()
    {

        $page=file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
        $mass=json_decode($page,true);
        for($i=0;$i<count($mass);$i++)
        {
            if($mass[$i]['ccy']=='USD')
            {
                $this->price=$mass[$i]['sale'];
            }
        }

    }



}


?>