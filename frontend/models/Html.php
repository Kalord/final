<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Html extends ActiveRecord
{
    public static function tableName()
    {
        return '{{html}}';
    }

    public function rules()
    {
        return [
            ['content', 'safe']
        ];
    }

    public static function getById($id)
    {
        return self::find()->where(['id' => $id])->one();
    }

    public static function getLast()
    {
        return self::find()->orderBy(['id' => SORT_DESC])->one();
    }
};