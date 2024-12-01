<section class="container">
    <div>
        <h2 class="page__title">
            <?php echo $data['content']->name ?>
        </h2>
    </div>
    <form action="" class="form__update" method="post">
        <div class="enclosure__title-container">
            <label for="enclosure__title-update" class="enclosure__title-label">
                Nom de l'enclos : 
            </label>
            <input required name="enclosure__title-update" id="enclosure__title-update" type="text" value="<?php echo $data['content']->name?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['enclosure__title-update'])) echo $data['errors']['enclosure__title-update'] ?>
            </small>
        </div>
        <div class="enclosure__description-container">
            <label for="description__update" class="description__label">
                Description de l'enclos : 
            </label>
            <input required name="description__update" id="description__update" type="text" value="<?php echo $data['content']->description?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['description__update'])) echo $data['errors']['description__update'] ?>
            </small>
        </div>
        <div class="form__update-button-container">
            <button type="submit" class="form__update-button">
                Mettre à jour l'enclos
            </button>
        </div>
    </form>
</section>