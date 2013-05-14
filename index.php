<?php 
  require_once('model.php');
  require_once('controllers.php');
  $uri = $_SERVER['REQUEST_URI'];
  if('/blog/index.php' == $uri){
    list_of_post();  
  }
  if('/blog/index.php/add' == $uri){
    add_posts();
  }
  if('/blog/index.php/edit' == $uri){
    edit_post();
  }
  if(starts_with($uri,'/blog/index.php/edit?n=') == 1){
    edit_post();
  }
  if(starts_with($uri,'/blog/index.php/delete?n=') == 1){
    delete_post();
  }
  if('/blog/index.php/delete' == $uri){
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
