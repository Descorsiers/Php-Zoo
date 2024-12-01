<?php 
use Zoo\models\Enclosure;

$errors = [];

var_dump($_POST);

if(empty($_POST)){
    $errors['delete'] = 'Une erreur c\'est produite';
    header('Location: /');
}

$enclosure = new Enclosure();

if(!empty($_POST['delete__id'])){
    try {
        $enclosure->setId($_POST['delete__id']);
    } catch (\Exception $e) {
        $errors['delete__id'] = $e->getMessage();
    }
} else {
    $errors['delete__id'] = 'Une erreur c\'est produite';
}
if(empty($errors)){
    $enclosure->delete();
}


header('Location: /')





















?>