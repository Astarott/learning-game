<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subdomain}}`.
 */
class m191115_032852_create_subdomain_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subdomain}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subdomain}}');
    }
}
