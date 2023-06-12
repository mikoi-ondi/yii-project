<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cities_comments}}`.
 */
class m230608_064301_create_cities_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cities_comments}}', [
            'id' => $this->primaryKey(),
            'id_city' => $this->integer(),
            'id_comment' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cities_comments}}');
    }
}
