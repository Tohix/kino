<?php

use yii\db\Schema;
use yii\db\Migration;

class m150217_202351_create_user_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('user', [
           'id' => 'pk',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => 'varchar(255) NOT NULL',
            'auth_key' => 'varchar(255) NOT NULL',
            'created' => Schema::TYPE_TIMESTAMP,
            'updated' => Schema::TYPE_TIMESTAMP,
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('user');
    }
}
