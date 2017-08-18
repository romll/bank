<?php

use yii\db\Migration;

/**
 * Handles the creation of table `statement`.
 */
class m170818_103108_create_statement_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('statement', [
            'id' => $this->primaryKey(),
            'date_pay' => $this->date()->notNull(),
            'sum' => $this->money()->notNull(),
            'handbk_bank_id' => $this->integer()->notNull(),
            'locality_id' => $this->integer()->notNull(),
            'checked' => $this->integer()->defaultValue(0),
            'note' => $this->text(),
            'state' => $this->integer()->defaultValue(0),
        ]);

        $this->createIndex('idx_statement', 'statement', 'sum');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('statement');
    }
}
