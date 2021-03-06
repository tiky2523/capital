<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cbuild;

/**
 * CbuildSearch represents the model behind the search form of `app\models\Cbuild`.
 */
class CbuildSearch extends Cbuild
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_b', 's_name', 'l_name'], 'safe'],
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
        $query = Cbuild::find();

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
        $query->andFilterWhere(['like', 'code_b', $this->code_b])
            ->andFilterWhere(['like', 's_name', $this->s_name])
            ->andFilterWhere(['like', 'l_name', $this->l_name]);

        return $dataProvider;
    }
}
