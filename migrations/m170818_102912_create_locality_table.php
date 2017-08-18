<?php

use yii\db\Migration;

/**
 * Handles the creation of table `locality`.
 */
class m170818_102912_create_locality_table extends Migration
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

        $this->createTable('locality', [
            'id' => $this->primaryKey(),
            'name_localiti' => $this->string()->notNull(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('locality');
    }
}
