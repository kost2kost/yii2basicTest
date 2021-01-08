<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m210108_062720_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name_user' => $this->string(20)->notNull(),
            'first_name' => $this->string(50),
            'middle_name' => $this->string(50),
            'last_name' => $this->string(50),
            'date_birth' => $this->datetime(),
            'string_validation' => $this->string(100),
        ]);
        $this->insert('{{%users}}', [
            'name_user' => 'kost',
            'last_name' => 'Костяшин',
        ]);
        $this->insert('{{%users}}', [
            'name_user' => 'test',
            'last_name' => 'test',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%users}}', ['id' => 2]);
        $this->delete('{{%users}}', ['id' => 1]);
        $this->dropTable('{{%users}}');
    }
}
