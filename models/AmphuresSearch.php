<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Amphures;

/**
 * AmphuresSearch represents the model behind the search form of `app\models\Amphures`.
 */
class AmphuresSearch extends Amphures
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['AMPHUR_ID', 'GEO_ID', 'PROVINCE_ID'], 'integer'],
            [['AMPHUR_CODE', 'AMPHUR_NAME', 'POSTCODE'], 'safe'],
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
        $query = Amphures::find();

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
            'AMPHUR_ID' => $this->AMPHUR_ID,
            'GEO_ID' => $this->GEO_ID,
            'PROVINCE_ID' => $this->PROVINCE_ID,
        ]);

        $query->andFilterWhere(['like', 'AMPHUR_CODE', $this->AMPHUR_CODE])
            ->andFilterWhere(['like', 'AMPHUR_NAME', $this->AMPHUR_NAME])
            ->andFilterWhere(['like', 'POSTCODE', $this->POSTCODE]);

        return $dataProvider;
    }
}
