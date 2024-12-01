<?php 
use Zoo\models\Enclosure;

$errors = [];

$enclosure = new Enclosure();

if(empty($_POST)){
    render('enclosures/create', [
        'errors'=>$errors
    ]);
}else{
    if(!empty($_POST['enclosure__title-create'])){
        try {
            $enclosure->setName($_POST['enclosure__title-create']);
        } catch (\Exception $e) {
            $errors['enclosure__title-create'] = $e->getMessage();
        }
    }else{
        $errors['enclosure__title-create'] = 'Vous devez choisir un nom !';
    }
    if(!empty($_POST['description__create'])){
        try {
            $enclosure->setDescription($_POST['description__create']);
        } catch (\Exception $e) {
            $errors['description__create'] = $e->getMessage();
        }
    }else{
        $errors['description__create'] = 'La description de l\'enclos est obligatoire !';
    }
    if(empty($errors)){
        $enclosure->create();
        header('Location: /');
    }else{
        render('enclosures/create', [
            'errors'=>$errors
        ]);
    }
}
























?>