<?php 
require_once('model.php');
require_once('controllers.php');


function uri_is($uri){
    $requested_uri = $_SERVER['PHP_SELF'];
    if ($requested_uri == '/index.php'.$uri){
        return True;
    }
    return False;
}


if (uri_is('')){
    list_of_post();  
}
?>
