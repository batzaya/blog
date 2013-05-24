<a href="<?php echo admin_uri('/Admin/add') ?>">+ Шинээр Админ нэмэх</a>
<table>
    <tr>
        <th>Админы нэр</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($admins as $admin):?>
    <tr>
        <td><?php echo $admin['name'];?></td>
        <td><a href="<?php echo admin_uri('/Admin/edit?id='.$admin['id']) ?>">Засах</a></td>
        <td><a href="<?php echo admin_uri('/Admin/delete?id='.$admin['id']) ?>">Устгах</a></td>
    </tr>
    <?php endforeach;?>
</table>
