<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Akt;

/**
 * AktSearch represents the model behind the search form about `app\models\Akt`.
 */
class AktSearch extends Akt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'handbk_bank_id', 'state'], 'integer'],
            [['date_transfer'], 'safe'],
            [['sum'], 'number'],
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
        $query = Akt::find();

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
            'date_transfer' => $this->date_transfer,
            'sum' => $this->sum,
            'handbk_bank_id' => $this->handbk_bank_id,
            'state' => $this->state,
        ]);

        return $dataProvider;
    }
}
