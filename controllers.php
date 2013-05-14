<?php
function list_of_post()
{
    $rows = get_all_posts();
    require 'template/list.php';
}
function edit_post()
{
    require 'template/edit.php';
}
function delete_post()
{    
    require 'template/delete.php';
}
?>
