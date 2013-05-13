<?php 
  require_once('model.php');
  require_once('controllers.php');
  $uri = $_SERVER['REQUEST_URI'];
  if('/index.php' == $uri){
    list_of_post();  
  }
  if('/index.php/add' == $uri){
      add_posts();
  }
  if('/index.php/edit' == $uri){
    edit_post();
  }
  if(starts_with($uri,'/index.php/edit?n=') == 1){
    edit_post();
  }
  if(starts_with($uri,'/index.php/delete?n=') == 1){
    delete_post();
  }
  if('/index.php/delete' == $uri){
    delete_post();
  }
  function starts_with($uri,$edit)
  {
      $length=strlen($edit);
      if($edit == substr($uri,0,$length))
          return 1;
      else
          return 0;
  }
?>
