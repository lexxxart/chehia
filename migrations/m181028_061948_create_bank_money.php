<?php

use yii\db\Migration;

/**
 * Class m181028_061948_create_bank_money
 */
class m181028_061948_create_bank_money extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
   $this->createTable('bank', [
            'id' => $this->primaryKey(),
            'user' => $this->String(32)->notNull(),
            'money' => $this->String(32)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropTable('bank');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
       $this->createTable('bank', [
            'id' => $this->primaryKey(),
            'user' => $this->String(32)->notNull(),

        ]);
    }

    public function down()
    {
        echo "m181028_061948_create_bank_money cannot be reverted.\n";

        return false;
    }
    */
	
	    Yii::$app->runAction("gii/model", ["tableName"=>"bank_money", "modelClass"=>"bank_money", "ns"=>"\\common\\models"]);


}
