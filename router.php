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
    case '/enclosure/animals':
        require './controllers/animals/indexCtrl.php';
        break;
    case '/animal':
        require './controllers/animals/updateCtrl.php';
        break;
    case '/animal/create':
        require './controllers/animals/createCtrl.php';
        break;
    case '/animal/delete':
        require './controllers/animals/deleteCtrl.php';
        break;
    default:
        require './views/404.php';
        break;
}






















?>