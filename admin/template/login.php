<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Нэвтрэх хэсэг</h1>
    <form id="form" action="" method="POST">
        Хэрэглэгчийн нэр :<input type="text" name="name" value=""/><br/>
        Нууц үг :<input type="password" name="password" style="margin-left:70px"/><br/>
        <input type="submit" value="нэвтрэх" name="login" style="margin-left:240px"/></br>
        <?php echo $error_msg; ?>
    </form>
</body>
</html>
