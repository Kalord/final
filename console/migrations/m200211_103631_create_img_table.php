<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%img}}`.
 */
class m200211_103631_create_img_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%img}}', [
            'id' => $this->primaryKey(),
            'src' => $this->string()->notNull(),
            'id_html' => $this->integer()->notNull(),
            'id_category' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%img}}');
    }
}
