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


function login(){
    /*
    if (is_logged_in()){
        list_of_posts(); // show homepage
        return;
    }
     */
    /*
    if (!(isset($_SESSION['name']) && $_SESSION['name'])) {  // TODO is_logged_in
    }
     */
    if ($_POST['login']) {
        $login_ok = user_exists($_POST['name'], $_POST['password']);
        if ($login_ok){
            list_of_posts(); // show homepage
            return;
        }else{
            $error_msg =  'login error';
        }
    }
    render('login', array());
    return $_SESSION['name']; // TODO is_logged_in
}


function logout()
{
    render('logout');
    session_destroy();
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

function admins_list(){
    $admins = get_all_admins();
    render('list_admins', array('admins' => $admins));
}

function add_admin(){
    if ($_POST) {
        create_admin($_POST['username'], $_POST['password']);
        header('Location: '.admin_uri('/Admin'));
    }
    render('add_admin', array());
}


function admin_edit($id){
    if($_POST){
        update_admin($id);
        header('Location: '.admin_uri('/Admin'));
    }
    render('edit_admin', array('admin' => get_admin_by_id($id)));
}


function admin_delete($id){
    delete_admin($id);
    header('Location: '.admin_uri('/Admin'));
}
?>
