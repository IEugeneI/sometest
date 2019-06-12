<?php
$createorder = new controllers\OrderCreateController();
require_once ('header/header.php');

?>

<div class="form">
    <form action="" method="post">
        <p>ВВедите имя:</p>
        <input type="text" name="name" id="name" placeholder="только буквы" >
        <p>ВВедите фамилию:</p>
        <input type="text" name="sername" id="sername" placeholder="только буквы" >
        <p>ВВедите телефон:</p>
        <input type="text" name="phone" id="phone" placeholder="+38(000)000-0000">
        <p>ВВедите email:</p>
        <input type="email" name="email" id="email" pattern="a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="youremail@gmail.com">
        <p>ВВедите город:</p>
        <input type="text" name="town" id="town" placeholder="только буквы" >
        <p>ВВедите сумму:</p>
        <input type="number" name="summ" id="summ" step="0.01" placeholder="00.00">
       <p> <button type="submit" class="btn btn-success delete" name="add" > Добавить</button></p>
    </form>
</div>





















<?php
require_once ('footer/footer.php')
?>
