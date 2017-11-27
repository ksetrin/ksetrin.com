<?php

use yii\db\Schema;
use yii\db\Migration;

class m151012_134547_creat_table_comments extends Migration
{
    public function up()
    {
/*comment_id
user_id
text
created_at
updated_at*/
    }

    public function down()
    {
        echo "m151012_134547_creat_table_comments cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
