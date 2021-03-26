<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%photos}}`.
 */
class m210326_214615_create_photos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%photos}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%photos}}');
    }
}
