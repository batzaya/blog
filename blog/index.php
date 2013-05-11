<?php 
  require_once('model.php');
  require_once('controllers.php');
  $uri = $_SERVER['REQUEST_URI'];
  if('/Blog/blog/' == $uri || '/Blog/blog/index.php' == $uri){
    list_of_post();  
  }
  if('/Blog/blog/index.php/add' == $uri){
      add_posts();
  }
  if('/Blog/blog/index.php/edit' == $uri){
    edit_post();
  }
  if('/Blog/blog/index.php/edit?n=' == substr($uri,0,28)){
    edit_post();
  }
  if('/Blog/blog/index.php/delete?n=' == substr($uri,0,30)){
    delete_post();
  }
  if('/Blog/blog/index.php/delete' == $uri){
    delete_post();
  }
?>
