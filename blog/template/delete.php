<?php  if(isset($_GET["n"])) delete();?>
<?php ob_start();?>
    <div id = "header">
        <a href="/Blog/blog/index.php/add">
            <div > Home </div>
        </a>
        <a href="/Blog/blog/index.php/edit">
            <div > Edit </div>
        </a>
        <a href="/Blog/blog/index.php/delete">
            <div > Delete </div>
        </a>
    </div>
    <div id = "zaavar">устах пост дээр дарна уу!</div>
        <?php $row  =  get_all_posts();foreach ($row as $row ):?>
        <ul > 
            <li><a href = "<?php echo '/Blog/blog/index.php/delete?n='.$row['ID']?>"
                <h3>
                    <?php echo $row['garchig'];?><br/>
                    <span><?php echo $row['time'];?></span>
                </h3></a>
            </li>
        </ul>
        <?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php require_once('layout.php');?>
