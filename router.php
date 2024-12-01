<?php 
require './utils/splAutoload.php';
require './utils/utils.php';

switch ($_SERVER['REDIRECT_URL']) {
    case '/':
        require './controllers/enclosures/indexCtrl.php';
        break;
    case '/enclosure':
        require './controllers/enclosures/updateCtrl.php';
        break;
    case '/enclosure/create':
        require './controllers/enclosures/createCtrl.php';
        break;
    case '/enclosure/delete':
        require './controllers/enclosures/deleteCtrl.php';
        break;
    default:
        require './views/404.php';
        break;
}






















?>