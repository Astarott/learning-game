<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task}}`.
 */
class m191115_032802_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task}}', [
            'id' => $this->primaryKey(),
            'name' => $this -> string() -> notNull(),
            'description' => $this -> string(),
            'requirements' => $this ->string(),
            'timetodo' => $this -> dateTime(),
            'complexity' => $this -> string(),
            'answer' => $this->string() ->notNull(),
            'points' => $this -> integer() ->defaultValue(0),

            'author_id' => $this -> integer(),
            'subdomain_id' =>$this -> integer() -> notNull(),
            ]);
        $this ->createIndex(
            'idx-task-author_id',
            'task',
            'author_id'
        );
        $this ->createIndex(
            'idx-task-subdomain_id',
            'task',
            'subdomain_id'
        );
        $this ->addForeignKey(
            'fk-task-author_id',
            'task',
            'author_id',
            'user',
            'id',
            'NO ACTION'
        );
        $this -> addForeignKey(
            'fk-task-subdomain_id',
            'task',
            'subdomain_id',
            'subdomain',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropIndex(
            'idx-task-author_id',
            'task'
        );
        $this -> dropIndex(
            'idx-task-subdomain_id',
            'task'
        );
        $this->dropForeignKey(
            'fk-task-subdomain_id',
            'task'
        );
        $this->dropForeignKey(
            'fk-task-subdomain_id',
            'task'
        );
        $this->dropTable('{{%task}}');
    }
}
