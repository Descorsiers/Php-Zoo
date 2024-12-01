<?php 
use Zoo\models\Animal;
use Zoo\models\Enclosure;

// Creation of an array for storing any errors we encounter

$errors = [];

$animal = new Animal();
$enclosure = new Enclosure();

// If there is no $_POST when we load this page, just require the associate's view of the controller with the needed data

if(empty($_POST)){
    render('animals/create', [
        'errors'=>$errors,
        'enclosures'=>$enclosure->getAll()
    ]);
}

// If there is a $_POST, we check one by one all the data received to see if we have what we need

else{
    if(!empty($_POST['animal__title-create'])){
        try {
            $animal->setName($_POST['animal__title-create']);
        } catch (\Exception $e) {
            $errors['animal__title-create'] = $e->getMessage();
        }
    }else{
        $errors['animal__title-create'] = 'Vous devez choisir un nom !';
    }
    if(!empty($_POST['animal__description-create'])){
        try {
            $animal->setDescription($_POST['animal__description-create']);
        } catch (\Exception $e) {
            $errors['animal__description-create'] = $e->getMessage();
        }
    }else{
        $errors['animal__description-create'] = 'La description de l\'animal est obligatoire !';
    }
    if(!empty($_POST['animal__species-create'])){
        try {
            $animal->setspecies($_POST['animal__species-create']);
        } catch (\Exception $e) {
            $errors['animal__species-create'] = $e->getMessage();
        }
    }else{
        $errors['animal__species-create'] = 'L\'espèce de l\'animal est obligatoire !';
    }
    if(!empty($_POST['animal__enclosure-create'])){
        try {
            $animal->setId_enclosure($_POST['animal__enclosure-create']);
        } catch (\Exception $e) {
            $errors['animal__enclosure-create'] = $e->getMessage();
        }
    }else{
        $errors['animal__enclosure-create'] = 'L\'enclos de l\'animal est obligatoire !';
    }

    // If there is no errors, we create the new animal and redirect on the homepage the user

    if(empty($errors)){
        $animal->create();
        header('Location: /');
    }
    
    // If there is an or multiple errors, the animal is not created and the user is redirected on the page with the errors he has make
    
    else{
        render('animals/create', [
            'errors'=>$errors,
            'enclosures'=>$enclosure->getAll()
        ]);
    }
}
























?>