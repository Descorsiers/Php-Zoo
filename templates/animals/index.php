<section class="container">
    <div class="page__title-container">
        <h2 class="page__title">
            Listes des animaux de l'enclos
        </h2>
    </div>
    <div class="allAnimals">
        <?php foreach($data['content'] as $animal):  ?>
            <div class="animal__container">
                <h3 class="animal__title">
                    <?php echo $animal->name ?>
                </h3>
                <div class="animal__update-delete">
                    <a class="animal__update" href="../animal?id=<?php echo $animal->id  ?>">
                        <i class="fa-solid fa-pen fa-xl"></i>
                    </a>
                    <button type="button" class="animal__delete" target="delete__animal" id="<?php echo $animal->id ?>">
                        <i class="fa-solid fa-trash fa-xl"></i>
                    </button>
                </div>
            </div>
        <?php endforeach ?>
    </div>    
    <div class="newAnimal__container">
        <a href="../animal/create" class="newAnimal">
            Ajouter un nouvel animal
        </a>
    </div>
</section>    