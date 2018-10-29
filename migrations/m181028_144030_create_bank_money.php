<?php

use yii\db\Migration;

/**
 * Class m181028_144030_create_bank_money
 */
class m181028_144030_create_bank_money extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181028_144030_create_bank_money cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181028_144030_create_bank_money cannot be reverted.\n";

        return false;
    }
    */
}
