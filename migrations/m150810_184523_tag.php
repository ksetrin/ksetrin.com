<?php

use yii\db\Schema;
use yii\db\Migration;

class m150810_184523_tag extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tag}}', [
            'tag_id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'image' => $this->text(), // link or path
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'status' => $this->boolean(),
        ], $tableOptions);

        $this->createIndex('index_tag_id', '{{%tag}}', 'tag_id');
    }

    public function down()
    {
        $this->dropTable('{{%tag}}');
    }
}
