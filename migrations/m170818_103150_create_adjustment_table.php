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
        $this->createTable('adjustment', [
            'id' => $this->primaryKey(),
            'sum_id' => $this->integer()->notNull(),
            'date_transfer' => $this->date()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('adjustment');
    }
}
