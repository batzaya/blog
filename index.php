<?php 
  $uri = $_SERVER['REQUEST_URI'];
  if('/add' == $uri){
    ob_start();
    include(dirname(__FILE__).'/sf2blog/web/app.php');
    $content=ob_get_clean();
    require_once('template/layout.php');
  } else {
    require_once('model.php');
    require_once('controllers.php');
    if('/' == $uri){
      list_of_post();  
    }
    if('/edit' == $uri){
      edit_post();
    }
    if(starts_with($uri,'/edit?n=') == 1){
      edit_post();
    }
    if(starts_with($uri,'/delete?n=') == 1){
      delete_post();
    }
    if('/delete' == $uri){
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
  }
?>
