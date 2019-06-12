<?php
namespace controllers;
use models\OrdersGetModel;


class OrdersGetController
{
    public $modeloreders=array();
    private $filter=array();


    public function __construct()
    {
        if(isset($_POST['orderbutt']))
        {
            $i=0;
            if(!empty($_POST['numberorder']))
            {
                $this->filter[$i]['name']='id';
                $this->filter[$i]['val']=$_POST['numberorder'];
                $i++;
            }else{
                $this->filter['numberorder']=0;
            }

            if(!empty($_POST['townorder']))
            {
                $this->filter[$i]['name']='town';
                $this->filter[$i]['val']=$_POST['townorder'];
                $i++;
            }else{
                $this->filter['townorder']=0;
            }

            if(!empty($_POST['summorder']))
            {
                $this->filter[$i]['name']='summ';
                $this->filter[$i]['val']=$_POST['summorder'].'.00';
                $i++;
            }else{
                $this->filter['summorder']=0;
            }

            $this->filter=array_filter($this->filter);

            for($k=0;$k<count($this->filter);$k++){
                if($this->filter[$k]['name']=='town')
                {
                    $val=$this->filter[$k]['val'];
                    $query[$k]=$this->filter[$k]['name']."='".$val."'";
                }else{
                $query[$k]=$this->filter[$k]['name'].'='.$this->filter[$k]['val'];}

            }

            $newquery=implode(" and ",$query);
            $newquery='WHERE '.$newquery;
            $equalsigns=explode('summ',$newquery);

            $res=substr_replace($equalsigns[1], '<=', 0, 1);

            $newquery=$equalsigns[0].'summ'.$res.' ORDER BY id DESC';
            $orders=new OrdersGetModel($newquery);

            foreach ($orders as $order)
            {
              $this->modeloreders=$order;
            }
            return $this->modeloreders;


        }else{
            $orders=new OrdersGetModel('ORDER BY id DESC');

        foreach ($orders as $order)
        {
            $this->modeloreders=$order;

        }
        return $this->modeloreders;
        }


    }
}


?>