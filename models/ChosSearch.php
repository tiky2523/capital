<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chos;

/**
 * ChosSearch represents the model behind the search form of `app\models\Chos`.
 */
class ChosSearch extends Chos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code5', 'code9', 'hospital', 'type_hos', 'province', 'amphur', 'tumbon', 'moo'], 'safe'],
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
        $query = Chos::find();

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
        $query->andFilterWhere(['like', 'code5', $this->code5])
            ->andFilterWhere(['like', 'code9', $this->code9])
            ->andFilterWhere(['like', 'hospital', $this->hospital])
            ->andFilterWhere(['like', 'type_hos', $this->type_hos])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'amphur', $this->amphur])
            ->andFilterWhere(['like', 'tumbon', $this->tumbon])
            ->andFilterWhere(['like', 'moo', $this->moo]);

        return $dataProvider;
    }
}
