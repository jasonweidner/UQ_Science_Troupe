<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Map".
 *
 * @property int $id
 * @property double $lat
 * @property double $long
 * @property string $address
 * @property int $user_id
 */
class Map extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lat', 'long', 'address'], 'required'],
            [['lat', 'long'], 'number'],
            [['user_id'], 'integer'],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lat' => 'Lat',
            'long' => 'Long',
            'address' => 'Address',
            'user_id' => 'User ID',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id'=>'user_id']);
    }
}
