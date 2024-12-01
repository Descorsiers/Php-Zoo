<section class="container">
    <div class="page__title-container">
        <h2 class="page__title">
            Listes des enclos
        </h2>
    </div>
    <div class="allEnclosures">
        <?php foreach($data['content'] as $enclosure):  ?>
            <div class="enclosure__container">
                <h3 class="enclosure__title">
                    <a class="enclosure__animals" href="enclosure/animals?id=<?php echo $enclosure->id ?>">
                        <?php echo $enclosure->name ?>
                    </a>
                </h3>
                <div class="enclosure__update-delete">
                    <a class="enclosure__update" href="enclosure?id=<?php echo $enclosure->id  ?>">
                        <i class="fa-solid fa-pen fa-xl"></i>
                    </a>
                    <button type="button" class="enclosure__delete" target="delete__enclosure" id="<?php echo $enclosure->id ?>">
                        <i class="fa-solid fa-trash fa-xl"></i>
                    </button>
                </div>
            </div>
        <?php endforeach ?>
    </div>    
    <div class="newEnclosure__container">
        <a href="enclosure/create" class="newEnclosure">
            Ajouter un nouvel enclos
        </a>
    </div>
</section>    