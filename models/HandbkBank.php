<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "handbk_bank".
 *
 * @property integer $id
 * @property string $name_bank
 *
 * @property Akt[] $akts
 * @property Statement[] $statements
 */
class HandbkBank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'handbk_bank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_bank'], 'required'],
            [['name_bank'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_bank' => 'Назва банку',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAkts()
    {
        return $this->hasMany(Akt::className(), ['handbk_bank_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatements()
    {
        return $this->hasMany(Statement::className(), ['handbk_bank_id' => 'id']);
    }
}
