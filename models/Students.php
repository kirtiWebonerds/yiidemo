<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property string $id
 * @property string $name
 * @property string $dob
 * @property string $city
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dob', 'city'], 'required'],
            [['dob'], 'safe'],
            [['name', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'dob' => 'Dob',
            'city' => 'City',
        ];
    }
}
