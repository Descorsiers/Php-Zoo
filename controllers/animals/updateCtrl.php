<?php 
use Zoo\models\Animal;
use Zoo\models\Enclosure;

$enclos__id = null;

$errors = [];

if (empty($_GET['id'])) header('Location: 404');

$animal = new Animal();
$enclosure = new Enclosure();

try {
    $animal->setId($_GET['id']);
} catch (\Exception $e) {
    throw $e;
}

if(!empty($_POST)){
    var_dump($oldEnclosure);
    if(!empty($_POST['animal__title-update'])){
        try {
            $animal->setName($_POST['animal__title-update']);
        } catch (\Exception $e) {
            $errors['animal__title-update'] = $e->getMessage();
        }
    }else{
        $errors['animal__title-update'] = 'Vous devez choisir un nom !';
    }
    if(!empty($_POST['animal__description-update'])){
        try {
            $animal->setDescription($_POST['animal__description-update']);
        } catch (\Exception $e) {
            $errors['animal__description-update'] = $e->getMessage();
        }
    }else{
        $errors['animal__description-update'] = 'Vous devez choisir une description !';
    }
    if(!empty($_POST['animal__species-update'])){
        try {
            $animal->setspecies($_POST['animal__species-update']);
        } catch (\Exception $e) {
            $errors['animal__species-update'] = $e->getMessage();
        }
    }else{
        $errors['animal__species-update'] = 'Vous devez choisir une espèce !';
    }
    if(!empty($_POST['animal__enclosure-update'])){
        try {
            $animal->setId_enclosure($_POST['animal__enclosure-update']);
        } catch (\Exception $e) {
            $errors['animal__enclosure-update'] = $e->getMessage();
        }
    }else{
        $errors['animal__enclosure-update'] = 'Vous devez choisir un enclos !';
    }
    if (empty($errors)) {
        $animal->update();
        header('Location: /');
    }
}

render('animals/update', [
    'content'=> $animal->getOne(),
    'enclosures' => $enclosure->getAll(),
    'errors' => $errors
])















?>