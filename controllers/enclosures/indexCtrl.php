<?php 

use Zoo\models\Enclosure;

$enclosures = new Enclosure();

render('enclosures/index', [
    'content' => $enclosures->getAll() 
]);



















?>