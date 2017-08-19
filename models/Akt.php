<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akt".
 *
 * @property integer $id
 * @property string $date_transfer
 * @property string $sum
 * @property integer $handbk_bank_id
 * @property integer $state
 *
 * @property HandbkBank $handbkBank
 */
class Akt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'akt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_transfer', 'sum', 'handbk_bank_id'], 'required'],
            [['date_transfer'], 'safe'],
            [['sum'], 'number'],
            [['handbk_bank_id', 'state'], 'integer'],
            [['handbk_bank_id'], 'exist', 'skipOnError' => true, 'targetClass' => HandbkBank::className(), 'targetAttribute' => ['handbk_bank_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_transfer' => 'Дата оплати',
            'sum' => 'Сума',
            'handbk_bank_id' => 'Банк',
            'state' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHandbkBank()
    {
        return $this->hasOne(HandbkBank::className(), ['id' => 'handbk_bank_id']);
    }
}
