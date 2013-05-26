<?php
function admin_uri($uri){
    return '/admin/index.php'.$uri;
}


function login(){
    if ($_POST['login']) {
        $login_ok = user_exists($_POST['name'], $_POST['password']);
        if($login_ok[0]){
            $_SESSION['login'] = true;
            list_of_post();
            break;
        }
        else{
            $error_msg = "Таны нэр эсвэл нууц үг буруу байна.";
        }
    }
    require_once('./template/login.php');
}


function is_logged_in(){
    if ((isset($_SESSION['login']) && $_SESSION['login'])){
        return True;
    }else{
        return False;
    }
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
        header('Location: '.admin_uri('/admin'));
    }
    render('add_admin', array());
}


function admin_edit($id){
    if($_POST){
        update_admin($id);
        header('Location: '.admin_uri('/admin'));
    }
    render('edit_admin', array('admin' => get_admin_by_id($id)));
}


function admin_delete($id){
    delete_admin($id);
    header('Location: '.admin_uri('/admin'));
}
?>
