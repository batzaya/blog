<?php require_once('/php/functions.php');?>
<?php  if(isset($_GET["n"])) delete();?>
<?php ob_start();?>
    <div id = "header">
        <a href = "../template/add.php">
            <div > Home </div>
        </a>
        <a href = "../template/edit.php">
            <div > Edit </div>
        </a>
        <a href = "../template/Delete.php">
            <div > Delete </div>
        </a>
    </div>
    <div id = "zaavar">устах пост дээр дарна уу!</div>
        <?php $row  =  show();foreach ($row as $row ):?>
        <ul > 
            <li><a href = "<?php echo 'delete.php?n='.$row['ID']?>"
                <h3>
                    <?php echo $row['garchig'];?><br/>
                    <span><?php echo $row['time'];?></span>
                </h3></a>
            </li>
        </ul>
        <?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php require_once('../layout/layout.php');?>