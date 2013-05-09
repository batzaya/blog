<?php require_once('/php/functions.php');?>
<?php if(isset($_POST["addData"])) { update();}?>
<?php ob_start();?>
    <div id="header">
        <a href="../template/add.php">
            <div > Home </div>
        </a>
        <a href="../template/edit.php">
            <div > Edit </div>
        </a>
        <a href="../template/Delete.php">
            <div > Delete </div>
        </a>
    </div>
    <div id='zaavar'> Засах постоо сонгоод доор нь засаж Add Data товчийг дарна уу!</div>
        <?php $row = show();foreach ($row as $row ):?>
        <ul > 
            <li><a href="<?php echo 'edit.php?n='.$row['ID']?>"
                <h3>
                    <?php echo $row['garchig'];?><br/>
                    <span><?php echo $row['time'];?></span>
                </h3></a>
            </li>
        </ul>
    <?php endforeach;?>
        <form method = "POST" action="">
            Гарчиг:<input type = "text" name = "garchig" id="garchig"/><br />
            <span id="sublime">Tекст:</span><textarea name="myText"></textarea><br />
            <input type = "submit" name = "addData" value="Add Data" id = "sub"/>
        </form>
<?php $content=ob_get_clean();?>
<?php require_once('../layout/layout.php');?>