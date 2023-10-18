<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\Controller;

class CountryForm extends Model

{
    public $code;
    public $name;
    public $population;

    public function rules()
    {
        return [
            [['code', 'name','population'], 'required'],
            ['code', 'string', 'length' => [1,2]],
            ['name', 'string', 'length' => [1,52]],
            ['population','number'],
            ['population', 'string', 'length' => [1,11]],
        ];
    }
    public function save()
    {
        $model=new Country();
        $model->code=$this->code;
        $model->name=$this->name;
        $model->population=$this->population;
        $model->save();
    }
}


