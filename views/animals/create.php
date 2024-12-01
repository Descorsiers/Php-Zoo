<?php 
ob_start();

render('animals/create', [
    'errors'=>$data['errors'],
    'enclosures'=>$data['enclosures']
], true);

$content = ob_get_clean();

render('default', [
    'content'=>$content
], true);















?>