<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%planet}}`.
 */
class m191115_032929_create_planet_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%planet}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%planet}}');
    }
}
