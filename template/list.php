<?php ob_start();?>

<?php foreach ($rows as $row ):?>
<div> 
    <h1> <?php echo $row['title'];?> </h1>
    <div><?php echo $row['time'];?></div>
    <p><?php echo $row['post'];?></p>
</div>
<?php endforeach;?>

<?php $content = ob_get_clean();?>
<?php require_once('layout.php');?>
