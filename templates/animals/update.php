<section class="container">
    <div>
        <h2 class="page__title">
            <?php echo $data['content']->name ?>
        </h2>
    </div>
    <form action="" class="form__update" method="post">
        <div class="animal__title-container">
            <label for="animal__title-update" class="animal__title-label">
                Nom de l'animal : 
            </label>
            <input  name="animal__title-update" id="animal__title-update" type="text" value="<?php echo $data['content']->name?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['animal__title-update'])) echo $data['errors']['animal__title-update'] ?>
            </small>
        </div>
        <div class="animal__description-container">
            <label for="animal__description-update" class="animal__description-label">
                Description de l'animal : 
            </label>
            <input required name="animal__description-update" id="animal__description-update" type="text" value="<?php echo $data['content']->description?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['animal__description-update'])) echo $data['errors']['animal__description-update'] ?>
            </small>
        </div>
        <div class="animal__species-container">
            <label for="animal__species-update" class="animal__species-label">
                Espèce de l'animal : 
            </label>
            <input required name="animal__species-update" id="animal__species-update" type="text" value="<?php echo $data['content']->species?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['animal__species-update'])) echo $data['errors']['animal__species-update'] ?>
            </small>
        </div>
        <div class="animal__enclosure-container">
            <label for="animal__enclosure-update" class="animal__enclosure-label">
                Enclos de l'animal : 
            </label>
            <select name="animal__enclosure-update" id="animal__enclosure-update">
                <?php foreach($data['enclosures'] as $enclosure): ?>
                    <option value="<?php echo $enclosure->id ?>">
                        <?php echo $enclosure->name ?>
                    </option>
                <?php endforeach ?>
            </select>
            <small class="errors__text">
                <?php if(!empty($data['errors']['animal__enclosure-update'])) echo $data['errors']['animal__enclosure-update'] ?>
            </small>
        </div>
        <div class="form__update-button-container">
            <button type="submit" class="form__update-button">
                Mettre à jour l'animal
            </button>
        </div>
    </form>
</section>