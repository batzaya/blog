<a href="<?php echo admin_uri('/add') ?>">+ Шинэ Бичлэг</a>
<br/>
<table>
    <tr>
        <th>Гарчиг</th>
        <th>Огноо</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($posts as $post):?>
    <tr>
        <td><?php echo $post['title'];?></td>
        <td><?php echo $post['time'];?></td>
        <td><a href="<?php echo admin_uri('/edit?id='.$post['id']) ?>">Засах</a></td>
        <td><a href="<?php echo admin_uri('/delete?id='.$post['id']) ?>">Устгах</a></td>
    </tr>
    <?php endforeach;?>
</table>
