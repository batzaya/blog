<?php ob_start();?>
       <?php foreach ($rows as $row ):?>
        <div id = "container"> 
            <h3>
                <?php echo $row['garchig'];?><br/>
                <span><?php echo $row['time'];?></span>
            </h3>
            <div ><?php echo $row['myPost'];?></div>
        </div>
    <?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php require_once('layout.php');?>