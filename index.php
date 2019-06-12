<?php
spl_autoload_register(function ($class)
{
    $path=str_replace('\\','/',$class).'.php';
    if(file_exists($path))
    {
        require $path;
    }
});


if (empty($_GET['path'])){
    require_once ('views/mainview.php');
}else if($_GET['path']=='admin'){
    require_once ('views/adminview.php');
}


?>