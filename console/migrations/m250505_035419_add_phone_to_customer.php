<?php

use yii\db\Migration;

class m250505_035419_add_phone_to_customer extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%customer}}', 'phone', $this->string(20));
    }
    
    public function safeDown()
    {
        $this->dropColumn('{{%customer}}', 'phone');
    }
    
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250505_035419_add_phone_to_customer cannot be reverted.\n";

        return false;
    }
    */
}
