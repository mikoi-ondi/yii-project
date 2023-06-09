<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cities_feedback}}`.
 */
class m230608_064301_create_cities_feedback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cities_feedback}}', [
            'id' => $this->primaryKey(),
            'id_city' => $this->integer(),
            'id_feedback' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cities_feedback}}');
    }
}
