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
        $tableOptions = null;
        if($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('handbk_bank', [
            'id' => $this->primaryKey(),
            'name_bank' => $this->string()->notNull(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('handbk_bank');
    }
}
