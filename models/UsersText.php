<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_text".
 *
 * @property int $id
 * @property string $username
 * @property string $join_date
 * @property int $user_type
 */
class UsersText extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_text';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'join_date', 'user_type'], 'required'],
            [['join_date'], 'safe'],
            [['user_type'], 'string'],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'join_date' => 'Join Date',
            'user_type' => 'User Type',
        ];
    }
}
