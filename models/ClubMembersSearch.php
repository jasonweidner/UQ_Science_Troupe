<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClubMembers;

/**
 * ClubMembersSearch represents the model behind the search form of `app\models\ClubMembers`.
 */
class ClubMembersSearch extends ClubMembers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'join_date', 'membership_payment_date', 'training_courses_passed', 'next_due_date', 'membership_status', 'officer'], 'safe'],
            [['membership_payment_amount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ClubMembers::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'join_date' => $this->join_date,
            'membership_payment_date' => $this->membership_payment_date,
            'membership_payment_amount' => $this->membership_payment_amount,
            'next_due_date' => $this->next_due_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'training_courses_passed', $this->training_courses_passed])
            ->andFilterWhere(['like', 'membership_status', $this->membership_status])
            ->andFilterWhere(['like', 'officer', $this->officer]);

        return $dataProvider;
    }
}
