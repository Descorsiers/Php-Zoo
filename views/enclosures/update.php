<?php 
ob_start();

render('enclosures/update', [
    'content'=> $data['content'],
    'errors'=> $data['errors']
], true);

$content = ob_get_clean();

render('default', [
    'content'=> $content,
], true);


















?>