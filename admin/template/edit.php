<form method="POST" action="">
    <table>
        <tr>
            <td><label>Гарчиг:</label></td>
            <td><input type="text" name="title" value="<?php echo $post['title'] ?>"/></td>
        </tr>
        <tr>
            <td><label>Tекст:</label></td>
            <td><textarea name="post" rows=8><?php echo $post['post'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Хадгалах"/>
            </td>
        </tr>
    </table>
</form>
