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
        $this->createTable('locality', [
            'id' => $this->primaryKey(),
            'name_localiti' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('locality');
    }
}
