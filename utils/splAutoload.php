<?php 
spl_autoload_register(function($class){
    $class = dirname(__DIR__, 2) .'/' . str_replace('\\', '/', $class);
    require "$class.php";

});






?>