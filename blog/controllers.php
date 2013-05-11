<?php
function list_of_post()
{
    $rows = get_all_posts();
    require '../blog/template/list.php';
}
function add_posts()
{   
    require '../blog/template/add.php';
}
function edit_post()
{
    require '../blog/template/edit.php';
}
function delete_post()
{    
    require '../blog/template/delete.php';
}
?>
