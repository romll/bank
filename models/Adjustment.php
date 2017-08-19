<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adjustment".
 *
 * @property integer $id
 * @property integer $sum_id
 * @property string $date_transfer
 *
 * @property Statement $sum
 */
class Adjustment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adjustment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sum_id', 'date_transfer'], 'required'],
            [['sum_id'], 'integer'],
            [['date_transfer'], 'safe'],
            [['sum_id'], 'exist', 'skipOnError' => true, 'targetClass' => Statement::className(), 'targetAttribute' => ['sum_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sum_id' => 'Сума',
            'date_transfer' => 'Дата надходження',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSum()
    {
        return $this->hasOne(Statement::className(), ['id' => 'sum_id']);
    }
}
