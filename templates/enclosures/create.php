<section class="container">
    <div>
        <h2 class="page__title">
            Création d'un enclos
        </h2>
    </div>
    <form action="" class="form__create" method="post">
        <div class="enclosure__title-container">
            <label for="enclosure__title-create" class="enclosure__title-label">
                Nom de l'enclos : 
            </label>
            <input required name="enclosure__title-create" id="enclosure__title-create" type="text" value="<?php echo (!empty($data['errors']) && !isset($data['errors']['enclosure__title-create'])) ? $_POST['enclosure__title-create'] : '' ?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['enclosure__title-create'])) echo $data['errors']['enclosure__title-create'] ?>
            </small>
        </div>
        <div class="enclosure__description-container">
            <label for="description__create" class="description__label">
                Description de l'enclos : 
            </label>
            <input required name="description__create" id="description__create" type="text" value="<?php echo (!empty($data['errors']) && !isset($data['errors']['description__create'])) ? $_POST['description__create'] : '' ?>">
            <small class="errors__text">
                <?php if(!empty($data['errors']['description__create'])) echo $data['errors']['description__create'] ?>
            </small>
        </div>
        <div class="form__create-button-container">
            <button type="submit" class="form__create-button">
                Créer l'enclos
            </button>
        </div>
    </form>
</section>
