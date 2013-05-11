<?php if(isset($_POST['addData'])){ add_post(connection());  }?>
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
           <form method = "POST" action = "">
            Гарчиг:<input type  =  "text" name  =  "garchig" id = "garchig"/><br />
            <span id = "sublime">Tекст:</span><textarea name = "myText"></textarea><br />
            <input type = "submit" name = "addData" value = "Add Data" id = "sub"/>
        </form>
<?php $content = ob_get_clean();?>
<?php require_once('layout.php');?>
