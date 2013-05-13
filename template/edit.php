<?php if(isset($_POST["addData"])) { update();}?>
<?php ob_start();?>
    <div id='zaavar'> Засах постоо сонгоод доор нь засаж Add Data товчийг дарна уу!</div>
        <?php $row = get_all_posts();foreach ($row as $row ):?>
        <ul > 
            <li><a href="<?php echo '/index.php/edit?n='.$row['ID']?>"
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
<?php require_once('layout.php');?>
