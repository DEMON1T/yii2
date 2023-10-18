<?php
?>

<table class="table table-hover">
    <?php foreach ($models as $model): ?>
        <tr>
            <td><?=$model->code?></td>
            <td><?=$model->name?></td>
            <td><?=$model->population?></td>
        </tr>
    <?php endforeach; ?>
</table>




