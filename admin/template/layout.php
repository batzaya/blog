<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8" />
</head>
<body>
    <div style="width: 800px; margin: auto;">
        <a href="<?php echo admin_uri('') ?>">Бичлэгүүд</a>
        <a href="<?php echo admin_uri('/admin') ?>">Админууд</a>
        <a href="<?php echo admin_uri('/logout') ?>">Гарах</a>
        <hr/>
        <?php echo $content;?>
    </div>
</body>
</html>
