<section class="container">
    <div>
        <h2 class="page__title">
            Création d'un animal
        </h2>
    </div>
    <form action="" class="form__create" method="post">
        <div class="animal__title-container">
            <label for="animal__title-create" class="animal__title-label">
                Nom de l'animal : 
            </label>
            <input name="animal__title-create" id="animal__title-create" type="text" value="<?php echo (!empty($data['errors']) && !isset($data['errors']['animal__title-create'])) ? $_POST['animal__title-create'] : '' ?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['animal__title-create'])) echo $data['errors']['animal__title-create'] ?>
            </small>
        </div>
        <div class="animal__description-container">
            <label for="animal__description-create" class="animal__description-label">
                Description de l'animal : 
            </label>
            <input required name="animal__description-create" id="animal__description-create" type="text" value="<?php echo (!empty($data['errors']) && !isset($data['errors']['animal__description-create'])) ? $_POST['animal__description-create'] : '' ?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['animal__description-create'])) echo $data['errors']['animal__description-create'] ?>
            </small>
        </div>
        <div class="animal__species-container">
            <label for="animal__species-create" class="animal__species-label">
                Espèce de l'animal : 
            </label>
            <input required name="animal__species-create" id="animal__species-create" type="text" value="<?php echo (!empty($data['errors']) && !isset($data['errors']['animal__species-create'])) ? $_POST['animal__species-create'] : '' ?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['animal__species-create'])) echo $data['errors']['animal__species-create'] ?>
            </small>
        </div>
        <div class="animal__enclosure-container">
            <label for="animal__enclosure-create" class="animal__enclosure-label">
                Enclos de l'animal : 
            </label>
            <select name="animal__enclosure-create" id="animal__enclosure-create">
                <?php foreach($data['enclosures'] as $enclosure): ?>
                    <option value="<?php echo $enclosure->id ?>">
                        <?php echo $enclosure->name ?>
                    </option>
                <?php endforeach ?>
            </select>
            <small class="errors__text">
                <?php if(!empty($data['errors']['animal__enclosure-create'])) echo $data['errors']['animal__enclosure-create'] ?>
            </small>
        </div>
        <div class="form__create-button-container">
            <button type="submit" class="form__create-button">
                Créer l'animal
            </button>
        </div>
    </form>
</section>
