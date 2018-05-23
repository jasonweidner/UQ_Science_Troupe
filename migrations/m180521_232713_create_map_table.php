<?php

use yii\db\Migration;

/**
 * Handles the creation of table `map`.
 */
class m180521_232713_create_map_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('map', [
            'id' => $this->primaryKey(),
            'lat' => $this->float() . ' NOT NULL',
            'long' => $this->float() . ' NOT NULL',
            'address' => $this->string() . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('map');
    }
}
