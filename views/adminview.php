<?php
use controllers\GetDollarPriceController;

$orders=new controllers\OrdersGetController();
$dollarprice=new controllers\GetDollarPriceController();
require_once ('header/header.php')
?>

<form action="" method="post">

    <div class="search">
        <p>Номер заказа:</p>
        <input type="text" name="numberorder" id="numberorder" size="9">
    </div>

    <div class="search">
        <p>Город :</p>
        <input type="text" name="townorder" id="townorder" size="10">
    </div>

    <div class="search">
        <p>Cумма до(грн) :</p>
       <select name="summorder">
           <option>100</option>
           <option>500</option>
           <option>1000</option>
           <option>5000</option>
       </select>
    </div>

    <div class="but">
       <input type="submit" class="btn btn-success" name="orderbutt" >
    </div>

</form>

<table class="table table-dark">
    <thead>
        <th scope="col">№ заказ</th>
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
        <th scope="col">Телефон</th>
        <th scope="col">Эл.почта</th>
        <th scope="col">Город</th>
        <th scope="col">Сумма в гривнах</th>
        <th scope="col">Сумма в долларах</th>
    </thead>
    <tbody>
        <?php
            foreach ($orders as $item) {
                for($i=0;$i<count($item);$i++){
                ?>
                    <tr>
                        <td><?=$item[$i]['id']?></td>
                        <td><?=$item[$i]['name']?></td>
                        <td><?=$item[$i]['sername']?></td>
                        <td><?=$item[$i]['phone']?></td>
                        <td><?=$item[$i]['email']?></td>
                        <td><?=$item[$i]['town']?></td>
                        <td><?=$item[$i]['summ']?></td>
                        <td><?=round($item[$i]['summ']/$dollarprice->price,2);?></td>
                    </tr>
         <?php   } }
        ?>
    </tbody>
</table>






















<?php
require_once ('footer/footer.php')
?>



