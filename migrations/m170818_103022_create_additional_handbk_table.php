<?php

use yii\db\Migration;

/**
 * Handles the creation of table `additional_handbk`.
 */
class m170818_103022_create_additional_handbk_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('additional_handbk', [
            'id' => $this->primaryKey(),
            'name_document' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('additional_handbk');
    }
}
