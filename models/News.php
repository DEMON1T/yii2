<?php

namespace app\models;

use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    private $title;
    private $content;
}