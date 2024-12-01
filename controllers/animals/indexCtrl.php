<?php 

use Zoo\models\Animal;

$errors = [];

if(empty($_GET)){
    header('Location: 404');
}

$animal = new Animal();

if(!empty($_GET['id'])){
    try {
        $animal->setId_enclosure($_GET['id']);
    } catch (\Exception $e) {
        $errors['id'] = $e->getMessage();
    }
}else{
    header('Location: 404');
}

render('animals/index', [
    'content' => $animal->getAll() 
]);



















?>