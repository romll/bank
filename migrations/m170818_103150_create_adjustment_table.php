<?php

use yii\db\Migration;

/**
 * Handles the creation of table `adjustment`.
 */
class m170818_103150_create_adjustment_table extends Migration
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

        $this->createTable('adjustment', [
            'id' => $this->primaryKey(),
            'sum_id' => $this->integer()->notNull(),
            'date_transfer' => $this->date()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_adjustment_sum_id', 'adjustment', 'sum_id', 'statement', 'id', 'CASCADE', 'RESTRICT');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('adjustment');
    }
}
