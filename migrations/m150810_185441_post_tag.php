<?php

use yii\db\Schema;
use yii\db\Migration;

class m150810_185441_post_tag extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post_tag}}', [
            'post_id' => $this->integer(),
            'tag_id' => $this->integer()
        ], $tableOptions);

        $this->addForeignKey(
            'FK_post_tag', '{{%post_tag}}', 'post_id', '{{%post}}', 'post_id', 'CASCADE', 'CASCADE'
        );

        $this->addForeignKey(
            'FK_tag_post', '{{%post_tag}}', 'tag_id', '{{%tag}}', 'tag_id', 'CASCADE', 'CASCADE'
        );

    }

    public function down()
    {
        $this->dropTable('{{%post_tag}}');
    }
}
