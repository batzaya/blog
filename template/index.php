<?php require_once('/php/functions.php');?>
<?php ob_start();?>
    <div id = "header">
        <a href = "./template/add.php">
            <div > Home </div>
        </a>
    </div>
    <?php $row  =  show();foreach ($row as $row ):?>
        <div id = "container"> 
            <h3>
                <?php echo $row['garchig'];?><br/>
                <span><?php echo $row['time'];?></span>
            </h3>
            <div ><?php echo $row['myPost'];?></div>
        </div>
    <?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php require_once('../layout/layout.php');?>
