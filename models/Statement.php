<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "statement".
 *
 * @property integer $id
 * @property string $date_pay
 * @property string $sum
 * @property integer $handbk_bank_id
 * @property integer $locality_id
 * @property integer $checked
 * @property string $note
 * @property integer $state
 *
 * @property Adjustment[] $adjustments
 * @property Locality $locality
 * @property HandbkBank $handbkBank
 */
class Statement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_pay', 'sum', 'handbk_bank_id'], 'required'],
            [['date_pay'], 'safe'],
            [['sum'], 'number'],
            [['handbk_bank_id', 'locality_id', 'checked', 'state'], 'integer'],
            [['note'], 'string'],
            [['locality_id'], 'exist', 'skipOnError' => true, 'targetClass' => Locality::className(), 'targetAttribute' => ['locality_id' => 'id']],
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
            'date_pay' => 'Дата надходження',
            'sum' => 'Сума',
            'handbk_bank_id' => 'Банк',
            'locality_id' => 'Тип населенорго пункту',
            'checked' => 'Checked',
            'note' => 'Примітка',
            'state' => 'State',
        ];
    }

    public function getBankName()
    {
        $bankName = HandbkBank::find()->all();
        return ArrayHelper::map($bankName, 'id', 'name_bank');
    }

    /*public  function getBankName()
    {
        return ArrayHelper::getValue($this->getBankList(), $this->handbk_bank_id);
    }*/

    public  function getLocalitiName()
    {
        $localitiTape =  Locality::find()->all();
        return ArrayHelper::map($localitiTape, 'id', 'name_localiti');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdjustments()
    {
        return $this->hasMany(Adjustment::className(), ['sum_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocality()
    {
        return $this->hasOne(Locality::className(), ['id' => 'locality_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHandbkBank()
    {
        return $this->hasOne(HandbkBank::className(), ['id' => 'handbk_bank_id']);
    }
}
