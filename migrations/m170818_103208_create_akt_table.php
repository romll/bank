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
        $this->createTable('akt', [
            'id' => $this->primaryKey(),
            'date_transfer' => $this->date()->notNull(),
            'sum' => $this->money()->notNull(),
            'handbk_bank_id' => $this->integer()->notNull(),
            'state' => $this->integer()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('akt');
    }
}
