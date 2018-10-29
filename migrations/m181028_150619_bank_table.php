<?php

use yii\db\Migration;

/**
 * Class m181028_150619_bank_table
 */
class m181028_150619_bank_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
   $this->createTable('bank', [
            'id' => $this->primaryKey(),
			'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
       $this->dropTable('bank');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181028_150619_bank_table cannot be reverted.\n";

        return false;
    }
    */
}
