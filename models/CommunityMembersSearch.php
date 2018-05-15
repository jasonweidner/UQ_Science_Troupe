<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CommunityMembers;

/**
 * CommunityMembersSearch represents the model behind the search form of `app\models\CommunityMembers`.
 */
class CommunityMembersSearch extends CommunityMembers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'postal_code', 'membership_approver'], 'integer'],
            [['name', 'organisation_name', 'street_address', 'state', 'country', 'membership_status', 'join_date', 'membership_approval_date'], 'safe'],
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
        $query = CommunityMembers::find();

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
            'postal_code' => $this->postal_code,
            'join_date' => $this->join_date,
            'membership_approval_date' => $this->membership_approval_date,
            'membership_approver' => $this->membership_approver,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'organisation_name', $this->organisation_name])
            ->andFilterWhere(['like', 'street_address', $this->street_address])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'membership_status', $this->membership_status]);

        return $dataProvider;
    }
}
