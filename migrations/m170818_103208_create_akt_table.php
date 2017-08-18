<?php

use yii\db\Migration;

/**
 * Handles the creation of table `akt`.
 */
class m170818_103208_create_akt_table extends Migration
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

        $this->createTable('akt', [
            'id' => $this->primaryKey(),
            'date_transfer' => $this->date()->notNull(),
            'sum' => $this->decimal(5, 2)->notNull(),
            'handbk_bank_id' => $this->integer()->notNull(),
            'state' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->addForeignKey('fk_akt_handbk_bank_id', 'akt', 'handbk_bank_id', 'handbk_bank', 'id', 'CASCADE', 'RESTRICT');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('akt');
    }
}
