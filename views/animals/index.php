<?php 
ob_start(); ?>
<h2 class="popup__title notClose">
    Attention
</h2>
<div class="popup__content notClose">
    <p class="notClose">
        Cette action est irréversible 
    </p>
    <p class="notClose">
        Voulez-vous vraiment supprimer cette animal ?
    </p>
</div>
<form action="../animal/delete" method="post" class="form__delete notClose">
    <input type="text" id="delete__id" name="delete__id">
    <div class="form__delete-button-container notClose">
        <button type="submit" class="form__delete-button notClose">
            Supprimer
        </button>
    </div>
</form>


<?php $deleteContent = ob_get_clean();  

ob_start();
render('animals/index', [
    'content' => $data['content']
], true);
render('components/popup', [
    'id'=> 'delete__animal',
    'content' => $deleteContent
], true);


$content = ob_get_clean();

render('default', [
    'content' => $content
], true);

























?>