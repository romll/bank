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
        $tableOptions = null;
        if($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('statement', [
            'id' => $this->primaryKey(),
            'date_pay' => $this->date()->notNull(),
            'sum' => $this->decimal(5, 2)->notNull(),
            'handbk_bank_id' => $this->integer()->notNull(),
            'locality_id' => $this->integer()->notNull(),
            'checked' => $this->integer()->defaultValue(0),
            'note' => $this->text(),
            'state' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createIndex('idx_statement', 'statement', 'sum');

        $this->addForeignKey('fk_statement_handbk_bank_id', 'statement', 'handbk_bank_id', 'handbk_bank', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('fk_statement_locality_id', 'statement', 'locality_id', 'locality', 'id', 'CASCADE', 'RESTRICT');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('statement');
    }
}
