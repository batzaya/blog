<?php
session_start();
$connect = mysqli_connect("localhost","root","","blog");
$query = "SELECT * FROM admin";
$result = mysqli_query($connect, $query);
if (isset($_GET['logout'])){
    unset($_SESSION['logged_in']);
    $message = "ta garsan bna";
}
if (isset($_POST['login'])){
    while ($row = mysqli_fetch_assoc($result)){
        if($row['name'] == $_POST['username'] && $row['password'] == $_POST['password']){
            $_SESSION['logged_in'] = 'true';
        }
    }
    if (!isset($_SESSION['logged_in'])){
        $message = "ta buru password oruulsan bna ";
    }
}
if (isset($_SESSION['logged_in'])){
    $message = "ta nevtersen bna";
}

$logged_in = isset($_SESSION['logged_in']);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php if ($logged_in){ ?>
        <a href="session.php?logout=0">log out</a>
    <?php }else { ?>
        <a href="login.php"> log in</a>    
    <?php } ?>

    <hr />
    
    <p><?php echo $message ?></p>
</body>
</html>

