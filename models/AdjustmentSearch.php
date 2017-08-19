<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Adjustment;

/**
 * AdjustmentSearch represents the model behind the search form about `app\models\Adjustment`.
 */
class AdjustmentSearch extends Adjustment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sum_id'], 'integer'],
            [['date_transfer'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Adjustment::find();

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
            'sum_id' => $this->sum_id,
            'date_transfer' => $this->date_transfer,
        ]);

        return $dataProvider;
    }
}
