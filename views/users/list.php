<?php use yii\helpers\Html;
use yii\helpers\Url;

foreach ($users as $user): ?>
    <div>
        <span><?= $user->username ?></span>
        <?= Html::a('Деактивировать', ['deactivate', 'id' => $user->id], ['class' => 'btn btn-danger']) ?>
    </div>
<?php endforeach; ?>
<table>
    <tr>
        <th>Имя</th>
        <th>Статус</th>
        <th>Действие</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->username ?></td>
            <td><?= $user->status ?></td>
            <td>
                <?php if ($user->status == 'active'): ?>
                    <a href="<?= Url::to (['users/deactivate', 'id' => $user->id]) ?>">Деактивировать</a>
                <?php else: ?>
                    <a href="<?= Url::to (['users/activate', 'id' => $user->id]) ?>">Активировать</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

