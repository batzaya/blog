<?php 
$dir = dirname(__FILE__);
require_once($dir.'/../model.php');
require_once($dir.'/controller.php');

function uri_is($uri){
    $requested_uri = $_SERVER['PHP_SELF'];
    if ($requested_uri == '/admin/index.php'.$uri){
        return True;
    }
    return False;
}


if (uri_is('')){
    list_of_post();  
}

if (uri_is('/add')){
    add_post();  
}

if (uri_is('/edit') && $_GET['id']){
    edit_post($_GET['id']);  
}

if (uri_is('/delete') && $_GET['id']){
    remove_post($_GET['id']);  
}

header('Status: 404 Not Found');
render('404', array());
