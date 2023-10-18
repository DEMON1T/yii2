<?php

namespace app\controllers;

use app\models\Login;
use app\models\ContactForm;
use app\models\SignupForm;
use Yii;
use yii\web\Controller;

class LoginController extends Controller
{
    public function actionAddAdmin()
    {
        $model = Login::find()->where(['username' => 'admin'])->one();
        if (empty($model)) {
            $user = new Login();
            $user->username = 'admin';
            $user->email = 'admin@кодер.';
            $user->setPassword('admin');
            $user->generateAuthKey();
            if ($user->save()) {
                echo 'good';
            }
        }
    }
        public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
}
