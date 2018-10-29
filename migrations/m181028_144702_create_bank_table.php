<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bank`.
 */
class m181028_144702_create_bank_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bank', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bank');
    }
}
