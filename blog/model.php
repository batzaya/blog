<?php
    function connection()
    {
        $con = mysqli_connect("localhost","root","123","blog");
        if(mysqli_connect_errno($con))
        {
            echo "Failed to connect MySQL: " . mysqli_connect_error();
        }
            return $con;
    }
    function sql_close()
    {
        mysqli_close($con);
    }
    function add_post($con)
    {
        $query = "INSERT INTO posts (garchig, myPost, time) VALUES ('".$_POST["garchig"]."', '".$_POST["myPost"]."', '".date("Y-m-d H:i:s")."')";
        mysqli_query($con,$query);
    }
    function get_all_posts()
    {
        $result = array();
        $table = mysqli_query(connection(),"SELECT * FROM posts ORDER BY time DESC");
        while($row = mysqli_fetch_array($table) ){
            $result[] = $row;
        }
        return $result;
    }
    function delete()
    {
        mysqli_query(connection(),"DELETE FROM posts WHERE ID = ".$_GET['n']);
    }
    function update()
    {
        mysqli_query(connection(),"UPDATE posts SET garchig = ' ".addslashes($_POST['garchig'])." ', myPost = ' ".addslashes($_POST['myText'])." ' where ID = ".$_GET['n']);
    }
?>
