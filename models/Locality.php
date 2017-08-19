<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "locality".
 *
 * @property integer $id
 * @property string $name_localiti
 *
 * @property Statement[] $statements
 */
class Locality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'locality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_localiti'], 'required'],
            [['name_localiti'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_localiti' => 'Вид населеного пункту',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatements()
    {
        return $this->hasMany(Statement::className(), ['locality_id' => 'id']);
    }
}
