<?php

use yii\db\Migration;

/**
 * Class m200306_182648_create_table_subscriber
 */
class m200306_182648_create_table_subscriber extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subscriber', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200306_182648_create_table_subscriber cannot be reverted.\n";
        $this->dropTable('subscriber');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200306_182648_create_table_subscriber cannot be reverted.\n";

        return false;
    }
    */
}
