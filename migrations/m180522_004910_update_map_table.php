<?php

use yii\db\Migration;

/**
 * Class m180522_004910_update_map_table
 */
class m180522_004910_update_map_table extends Migration
{

    public function safeUp()
    {

        $this->addColumn('{{%map}}', 'user_id', $this->integer());
        $this->addForeignKey('{{%id}}', '{{%user}}', 'user_id', '{{%map}}', $this->cascade, $this->cascade);
        
    }

    public function safeDown()
    {
        echo "m180522_004910_update_map_table cannot be reverted.\n";
        $this->dropColumn('{{%map}}', 'user_id');

        $this->dropForeignKey('{{%map}}', 'user_id', $this->cascade, $this->cascade);

        return false;
    }

}
