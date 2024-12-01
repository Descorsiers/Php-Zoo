<?php 
use Zoo\models\Animal;

$errors = [];

// If there is no $_POST, the animal is not deleted and the user is redirected on the homepage

if(empty($_POST)){
    $errors['delete__id'] = 'Une erreur c\'est produite';
    header('Location: /');
}

$animal = new Animal();

// If there is a $POST, we check if the data we need are in

if(!empty($_POST['delete__id'])){
    try {
        $animal->setId($_POST['delete__id']);
    } catch (\Exception $e) {
        $errors['delete__id'] = $e->getMessage();
    }
}
else {
    $errors['delete__id'] = 'Une erreur c\'est produite';
}
if(empty($errors)){
    $animal->delete();
}


header('Location: /')





















?>