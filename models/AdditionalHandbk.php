<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "additional_handbk".
 *
 * @property integer $id
 * @property string $name_document
 */
class AdditionalHandbk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'additional_handbk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_document'], 'required'],
            [['name_document'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_document' => 'Назва ознаки',
        ];
    }
}
