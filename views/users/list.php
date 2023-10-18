<?php use yii\helpers\Html;

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
            <td><?= $user->name ?></td>
            <td><?= $user->status ?></td>
            <td>
                <?php if ($user->status == 'active'): ?>
                    <a href="<?= Yii::$app->urlManager->createUrl(['user/deactivate', 'id' => $user->id]) ?>">Деактивировать</a>
                <?php else: ?>
                    <a href="<?= Yii::$app->urlManager->createUrl(['user/activate', 'id' => $user->id]) ?>">Активировать</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

