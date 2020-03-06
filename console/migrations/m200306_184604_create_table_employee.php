<?php

use yii\db\Migration;

/**
 * Class m200306_184604_create_table_employee
 */
class m200306_184604_create_table_employee extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'middle_name' => $this->string(),
            'last_name' => $this->string(),
            'birthdate' => $this->date(),
            'city' => $this->string(),
            'hiring_date' => $this->date(),
            'position' => $this->string(),
            'department' => $this->string(),
            'id_code' => $this->string(),
            'email' => $this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200306_184604_create_table_employee cannot be reverted.\n";
        $this->dropTable('employee');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200306_184604_create_table_employee cannot be reverted.\n";

        return false;
    }
    */
}
