<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "community_members".
 *
 * @property int $id
 * @property string $name
 * @property string $organisation_name
 * @property string $street_address
 * @property string $state
 * @property int $postal_code
 * @property string $country
 * @property string $membership_status
 * @property string $join_date
 * @property string $membership_approval_date
 * @property int $membership_approver
 *
 * @property User $id0
 */
class CommunityMembers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'community_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'organisation_name', 'street_address', 'state', 'postal_code', 'country', 'membership_status', 'join_date', 'membership_approval_date', 'membership_approver'], 'required'],
            [['postal_code', 'membership_approver'], 'integer'],
            [['membership_status'], 'string'],
            [['join_date', 'membership_approval_date'], 'safe'],
            [['name', 'organisation_name', 'street_address', 'state', 'country'], 'string', 'max' => 100],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'organisation_name' => 'Organisation Name',
            'street_address' => 'Street Address',
            'state' => 'State',
            'postal_code' => 'Postal Code',
            'country' => 'Country',
            'membership_status' => 'Membership Status',
            'join_date' => 'Join Date',
            'membership_approval_date' => 'Membership Approval Date',
            'membership_approver' => 'Membership Approver',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
