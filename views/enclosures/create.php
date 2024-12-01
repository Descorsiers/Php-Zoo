<?php 
ob_start();

render('enclosures/create', [
    'errors'=>$data['errors']
], true);

$content = ob_get_clean();

render('default', [
    'content'=>$content
], true);















?>