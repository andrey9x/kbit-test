<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%queue_statuses}}`.
 */
class m250625_204252_create_queue_statuses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%queue_statuses}}', [
            'id' => $this->primaryKey(),
            's_name' => $this->string(512)->notNull(),
            'c_name' => $this->string(512),
            'c_id' => $this->string(32),
            'a_type' => $this->string(128),
            'direction' => $this->string(32),
            'activation' => $this->string(32),
            'c_state' => $this->string(32),
            'control' => $this->string(32),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')
        ]);

        $this->createIndex('uq-queue_statuses', '{{%queue_statuses%}}', 's_name', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%queue_statuses}}');
    }
}
