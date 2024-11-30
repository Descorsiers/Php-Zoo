<?php 
spl_autoload_register(function($class){
    $class = __DIR__.str_replace('\\', '/', $class);

    require "$class.php";
});






?>