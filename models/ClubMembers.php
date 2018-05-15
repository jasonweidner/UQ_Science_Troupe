<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "club_members".
 *
 * @property int $id
 * @property string $name
 * @property string $join_date
 * @property string $membership_payment_date
 * @property string $membership_payment_amount
 * @property string $training_courses_passed
 * @property string $next_due_date
 * @property string $membership_status
 * @property string $officer
 *
 * @property User $id0
 */
class ClubMembers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'club_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'join_date', 'membership_payment_date', 'membership_payment_amount', 'training_courses_passed', 'next_due_date', 'membership_status', 'officer'], 'required'],
            [['join_date', 'membership_payment_date', 'next_due_date'], 'safe'],
            [['membership_payment_amount'], 'number'],
            [['officer'], 'string'],
            [['name', 'training_courses_passed', 'membership_status'], 'string', 'max' => 100],
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
            'join_date' => 'Join Date',
            'membership_payment_date' => 'Membership Payment Date',
            'membership_payment_amount' => 'Membership Payment Amount',
            'training_courses_passed' => 'Training Courses Passed',
            'next_due_date' => 'Next Due Date',
            'membership_status' => 'Membership Status',
            'officer' => 'Officer',
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
