<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Statement;

/**
 * StatementSearch represents the model behind the search form about `app\models\Statement`.
 */
class StatementSearch extends Statement
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'handbk_bank_id', 'locality_id', 'checked', 'state'], 'integer'],
            [['date_pay', 'note'], 'safe'],
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
        $query = Statement::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
              'pageSize' => 100
            ],
            'sort' => [
              'defaultOrder' => [
                  'date_pay' => SORT_DESC
              ]
            ],
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
            'date_pay' => $this->date_pay,
            'sum' => $this->sum,
            'handbk_bank_id' => $this->handbk_bank_id,
            'locality_id' => $this->locality_id,
            'checked' => $this->checked,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
