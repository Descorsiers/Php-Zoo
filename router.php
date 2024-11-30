<?php 
require './utils/splAutoload.php';
require './utils/utils.php';

switch ($_SERVER['REDIRECT_URL']) {
    case '/':
        require './controllers/indexCtrl.php';
        break;
    default:
        require './views/404.php';
        break;
}






















?>