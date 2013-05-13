<?php if(isset($_POST['addData'])){ add_post(connection());  }?>
<?php ob_start();?>
           <form method = "POST" action = "">
            Гарчиг:<input type  =  "text" name  =  "garchig" id = "garchig"/><br />
            <span id = "sublime">Tекст:</span><textarea name = "myText"></textarea><br />
            <input type = "submit" name = "addData" value = "Add Data" id = "sub"/>
        </form>
<?php $content = ob_get_clean();?>
<?php require_once('layout.php');?>
