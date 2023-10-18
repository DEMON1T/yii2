<?php

use yii\db\Migration;

/**
 * Class m231011_074448_country
 */
class m231011_074448_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country',[
            'code' => $this->char(2)->notNull(),
            'name' => $this->char(52)->notNull(),
            'population' => $this->integer(11)->notNull()->defaultValue(0),
        ]);
        $columnName = ['code','name','population'];
        $columnData = [
            ['AU','Australia','24016400'],
            ['BR','Brazil','205722000'],
            ['CA','Canada','35985751'],
        ];
        $this->batchInsert('country', $columnName, $columnData);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231011_074448_country cannot be reverted.\n";

        return false;
    }
    */
}
