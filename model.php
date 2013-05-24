<?php
function connection(){
    $con = mysqli_connect("localhost", "root", "123", "blog");
    if(mysqli_connect_errno($con)){
        echo "Failed to connect MySQL: ".mysqli_connect_error();
    }
    return $con;
}


function sql_close(){
    mysqli_close($con);
}


function get_post_by_id($id){
    $con = connection();

    $id = intval($id);
    $query = 'SELECT * FROM posts WHERE id = '.$id;
    $result = mysqli_query($con, $query);
    $post = mysqli_fetch_assoc($result);

    sql_close();

    return $post;
}


function create_post($title, $post){
    $query = "INSERT INTO posts (title, post, time) 
             VALUES ('".$title."', '".$post."', '".date("Y-m-d H:i:s")."')";

    $con = connection();
    mysqli_query($con, $query);
    sql_close();
}


function get_all_posts(){
    $rs = mysqli_query(connection(), "SELECT * FROM posts ORDER BY time DESC");
    $posts = array();
    while($post = mysqli_fetch_array($rs) ){
        $posts[] = $post;
    }
    return $posts;
}


function delete_post($id){
    $id = intval($id);
    $con = connection();
    mysqli_query($con, "DELETE FROM posts WHERE id= ".$id);
    sql_close();
}


function update_post($id){
    $query = "UPDATE posts SET title = '%s', post = '%s' WHERE id=%s";
    $sql = sprintf($query,
                   addslashes($_POST['title']),
                   addslashes($_POST['post']),
                   $id);
    mysqli_query(connection(), $sql);
}


function login_admin($name, $password) {
    $query = "SELECT COUNT(*) FROM admin 
             WHERE name='".$name."' AND password='".$password."'";
    $result = mysqli_query(connection(), $query) or die("end aldaatai bna");

    $count = mysqli_fetch_array($result);
    if ($count[0]) {
        $_SESSION['name'] = true;
    }
}


function get_all_admins(){
    $rs = mysqli_query(connection(), "SELECT * FROM admin");
    $admins = array();
    while($admin = mysqli_fetch_array($rs) ){
        $admins[] = $admin;
    }
    return $admins;
}


function create_admin($name,$pass){
    $query = "INSERT INTO admin (name, password) 
             VALUES ('".$name."', '".$pass."')";

    $con = connection();
    mysqli_query($con, $query);
    sql_close();
}


function update_admin($id)
{
    $query = "UPDATE admin SET name = '%s', password = '%s' WHERE id=%s";
    $sql = sprintf($query,
                   addslashes($_POST['username']),
                   addslashes($_POST['password']),
                   $id);
    mysqli_query(connection(), $sql);

}


function get_admin_by_id($id){
    $con = connection();

    $id = intval($id);
    $query = 'SELECT * FROM admin WHERE id = '.$id;
    $result = mysqli_query($con, $query);
    $admin = mysqli_fetch_assoc($result);

    sql_close();

    return $admin;
}

function delete_admin($id)
{
    $id = intval($id);
    $con = connection();
    mysqli_query($con, "DELETE FROM admin WHERE id = ".$id);
    sql_close();
}

?>
