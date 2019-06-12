<?php
namespace controllers;
use models\OrderCreateModel;



class OrderCreateController
{
    public function __construct()
    {
       if(isset($_POST['add'])) {
           if((!empty($_POST['name']))&&(!empty($_POST['sername']))&&(!empty($_POST['phone']))&&(!empty($_POST['email']))&&(!empty($_POST['town']))&&(!empty($_POST['summ'])))
           {
                if (preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $_POST['name']))
                {
                    if(preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $_POST['sername']))
                    {
                        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                        {
                            $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
                            if(iconv_strlen($phone)==12)
                            {
                                if(preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $_POST['town']))
                                {
                                    if(is_numeric($_POST['summ'])&&$_POST['summ']>0)
                                    {
                                        $ordercreatemodel=new OrderCreateModel($_POST['name'],$_POST['sername'],$phone,$_POST['email'],$_POST['town'],$_POST['summ']);
                                        echo "<p style='color:green'>Спасибо , ваш заказ добавлен</p>";
                                        return;
                                    }else{
                                        echo "<p style='color:red'>Неверно ввели сумму</p>";
                                        return;
                                    }
                                }else{
                                    echo"<p style='color:red'>Город должен содержать только буквы</p>";
                                    return;
                                }
                            }else{
                                echo "<p style='color:red'>Неверно ввели телефон</p>";
                                return;
                            }

                        }else{
                            echo "<p style='color:red'>Вы неправильно ввели email</p>";
                            return;
                        }

                    }else {
                        echo "<p style='color:red'>Фамилия должна содержать только буквы</p>";
                        return;
                    }
                } else {
                    echo "<p style='color:red'>Имя должно содержать только буквы</p> ";
                    return;
                }
           }else{
               echo "<p style='color:red'>Заполните все поля пожалуйста!</p>";
               return;
           }
       }
    }

}




?>