<?php

use yii\db\Schema;
use yii\db\Migration;

class m150810_180152_post extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'post_id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'description' => $this->text(),
            'content' => $this->text(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'status' => $this->boolean(),
        ], $tableOptions);

        $this->createIndex('index_post_id', '{{%post}}', 'post_id');
    }

    public function down()
    {
        $this->dropTable('{{%post}}');
    }
}
