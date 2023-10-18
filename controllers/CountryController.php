<?php

namespace app\controllers;

use app\models\Country;
use app\models\CountryForm;
use Yii;
use yii\web\Controller;

class CountryController extends Controller
{
 public function actionIndex(){
    return $this->render('index');
 }
 public function actionList(){
    $models = Country::find()->all();

    return $this->render('list', [
        'models' => $models
    ]);
 }
    public function actionEntry()
    {
        $model = new CountryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            return $this->render('country-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('country', ['model' => $model]);
        }
    }
 public function actionNew(){
    return $this->render('new');
 }


}