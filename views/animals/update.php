<?php 
ob_start();

render('animals/update', [
    'content'=> $data['content'],
    'enclosures'=>$data['enclosures'],
    'errors'=> $data['errors']
], true);

$content = ob_get_clean();

render('default', [
    'content'=> $content,
], true);