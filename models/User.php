<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $email
 * @property string $user_category
 * @property string $password
 * @property string $username
 * @property string $date_entered
 * @property int $phone_number
 * @property string $authKey
 * @property string $accessToken
 *
 * @property ClubMembers $clubMembers
 * @property CommunityMembers $communityMembers
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
        // , 'user_category', 'password', 'username', 'phone_number', 'authKey', 'accessToken'
            [['email'], 'required'],
            [['user_category'], 'string'],
            [['date_entered'], 'safe'],
            [['phone_number'], 'integer'],
            [['email'], 'string', 'max' => 60],
            [['password'], 'string', 'max' => 64],
            [['username'], 'string', 'max' => 45],
            [['authKey', 'accessToken'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'user_category' => 'User Category',
            'password' => 'Password',
            'username' => 'Username',
            'date_entered' => 'Date Entered',
            'phone_number' => 'Phone Number',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClubMembers()
    {
        return $this->hasOne(ClubMembers::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommunityMembers()
    {
        return $this->hasOne(CommunityMembers::className(), ['id' => 'id']);
    }
}
