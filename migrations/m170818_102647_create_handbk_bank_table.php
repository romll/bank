<?php

use yii\db\Migration;

/**
 * Handles the creation of table `handbk_bank`.
 */
class m170818_102647_create_handbk_bank_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('handbk_bank', [
            'id' => $this->primaryKey(),
            'name_bank' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('handbk_bank');
    }
}
