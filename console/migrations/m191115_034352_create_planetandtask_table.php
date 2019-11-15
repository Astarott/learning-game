<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%planetandtask}}`.
 */
class m191115_034352_create_planetandtask_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%planetandtask}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%planetandtask}}');
    }
}
