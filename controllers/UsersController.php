<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class UsersController extends Controller
{
    public function actionList()
    {
        $users = User::find()->all();
        return $this->render('list', ['users' => $users]);
    }
    public function actionDeactivate($id)
    {
        $user = User::findOne($id);

        if ($user) {

            $user->status = User::STATUS_DELETED;

            if ($user->save()) {
                Yii::$app->session->setFlash('success', 'Пользователь успешно деактивирован.');
            } else {
                Yii::$app->session->setFlash('error', 'Произошла ошибка при деактивации пользователя.');
            }
        } else {
            Yii::$app->session->setFlash('error', 'Пользователь не найден.');
        }

        return $this->redirect(['list']);
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::class,
                'only' => ['list'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'controllers' => ['users'],
                    ],
                ],
            ],
        ];
    }
    public function actionDeactivate($id)
    {
    $user = User::findOne($id);
    if ($user) {
        $user->status = 'inactive';
        $user->save();
    }
    return $this->redirect(['user/index']);
    }

    public function actionActivate($id)
    {
        $user = User::findOne($id);
        if ($user) {
            $user->status = 'active';
            $user->save();
        }
        return $this->redirect(['user/index']);
    }
}