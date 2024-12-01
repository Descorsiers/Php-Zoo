<?php 
use Zoo\models\Enclosure;

$enclos__id = null;

$errors = [];

if (empty($_GET['id'])) header('Location: /404');

$enclosure = new Enclosure();

try {
    $enclosure->setId($_GET['id']);
} catch (\Exception $e) {
    throw $e;
}

if(!empty($_POST)){
    if(!empty($_POST['enclosure__title-update'])){
        try {
            $enclosure->setName($_POST['enclosure__title-update']);
        } catch (\Exception $e) {
            $errors['enclosure__title-update'] = $e->getMessage();
        }
    }else{
        $errors['enclosure__title-update'] = 'Vous devez choisir un nom !';
    }
    if(!empty($_POST['description__update'])){
        try {
            $enclosure->setDescription($_POST['description__update']);
        } catch (\Exception $e) {
            $errors['description__update'] = $e->getMessage();
        }
    }else{
        $errors['description__update'] = 'Vous devez choisir une description !';
    }
    if (empty($errors)) {
        $enclosure->update();
    }
}

render('enclosures/update', [
    'content' => $enclosure->getOne(),
    'errors' => $errors
])















?>