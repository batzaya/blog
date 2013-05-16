<?php
function list_of_post(){
    $rows = get_all_posts();
    require 'template/list.php';
}
?>
