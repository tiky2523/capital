<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Building;

/**
 * BuildingSearch represents the model behind the search form of `app\models\Building`.
 */
class BuildingSearch extends Building
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_building', 'rank_cup', 'rank_sso', 'rank_hos', 'rank_CR'], 'integer'],
            [['bud_type', 'f_year', 'd_type', 'hcode', 'hname', 'b_list', 'b_type', 'p_type', 'p_no', 'u_price', 'unit_no', 'b_binding1', 'b_binding2', 'b_binding3', 't_budget', 'b_locate', 'amphur', 'tumbon', 'hos_lev', 't_build', 'reason', 'l_time', 'pop', 'opd_visit', 'active_bed', 'SUM_AdjRw', 'EC', 'ES', 'PCC', 'Famine', 'new_b', 'personels', 'd_update'], 'safe'],
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
        $query = Building::find();

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
            'id_building' => $this->id_building,
            'rank_cup' => $this->rank_cup,
            'rank_sso' => $this->rank_sso,
            'rank_hos' => $this->rank_hos,
            'rank_CR' => $this->rank_CR,
            'd_update' => $this->d_update,
        ]);

        $query->andFilterWhere(['like', 'bud_type', $this->bud_type])
            ->andFilterWhere(['like', 'f_year', $this->f_year])
            ->andFilterWhere(['like', 'd_type', $this->d_type])
            ->andFilterWhere(['like', 'hcode', $this->hcode])
            ->andFilterWhere(['like', 'hname', $this->hname])
            ->andFilterWhere(['like', 'b_list', $this->b_list])
            ->andFilterWhere(['like', 'b_type', $this->b_type])
            ->andFilterWhere(['like', 'p_type', $this->p_type])
            ->andFilterWhere(['like', 'p_no', $this->p_no])
            ->andFilterWhere(['like', 'u_price', $this->u_price])
            ->andFilterWhere(['like', 'unit_no', $this->unit_no])
            ->andFilterWhere(['like', 'b_binding1', $this->b_binding1])
            ->andFilterWhere(['like', 'b_binding2', $this->b_binding2])
            ->andFilterWhere(['like', 'b_binding3', $this->b_binding3])
            ->andFilterWhere(['like', 't_budget', $this->t_budget])
            ->andFilterWhere(['like', 'b_locate', $this->b_locate])
            ->andFilterWhere(['like', 'amphur', $this->amphur])
            ->andFilterWhere(['like', 'tumbon', $this->tumbon])
            ->andFilterWhere(['like', 'hos_lev', $this->hos_lev])
            ->andFilterWhere(['like', 't_build', $this->t_build])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'l_time', $this->l_time])
            ->andFilterWhere(['like', 'pop', $this->pop])
            ->andFilterWhere(['like', 'opd_visit', $this->opd_visit])
            ->andFilterWhere(['like', 'active_bed', $this->active_bed])
            ->andFilterWhere(['like', 'SUM_AdjRw', $this->SUM_AdjRw])
            ->andFilterWhere(['like', 'EC', $this->EC])
            ->andFilterWhere(['like', 'ES', $this->ES])
            ->andFilterWhere(['like', 'PCC', $this->PCC])
            ->andFilterWhere(['like', 'Famine', $this->Famine])
            ->andFilterWhere(['like', 'new_b', $this->new_b])
            ->andFilterWhere(['like', 'personels', $this->personels]);

        return $dataProvider;
    }
}
