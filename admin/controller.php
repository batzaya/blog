<?php
function admin_uri($uri){
    return '/admin/index.php'.$uri;
}


function render($template, $args){
    foreach ($args as $key => $value){
        $$key = $value;
    }
    ob_start();
    require_once(dirname(__FILE__).'/template/'.$template.'.php');
    $content = ob_get_clean();
    require_once(dirname(__FILE__).'/template/layout.php');
}


function list_of_post(){
    $posts = get_all_posts();
    render('list', array('posts' => $posts));
}


function add_post(){
    if ($_POST){
        create_post($_POST['title'], $_POST['post']);
        header('Location: '.admin_uri('')) ;
    }
    render('add', array());
}


function edit_post($id){
    if ($_POST){
        update_post($id);
        header('Location: '.admin_uri('')) ;
    }
    render('edit', array('post' => get_post_by_id($id)));
}


function remove_post($id){
    delete_post($id);
    header('Location: '.admin_uri(''));
}
?>
