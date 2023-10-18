<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%worksheet_disinfections}}`.
 */
class m231011_070533_CreateWorksheetDisinfectionsTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('worksheet_disinfections', [
            'id' => $this->primaryKey(),
            'object_id' => $this->integer(),
            'type' => $this->string(255)->notNull(),
            'organization_name'=> $this->string(255),
            'adress' => $this->string(255),
            'boxs' => $this->text()->notNull(),
            'area_all' => $this->double()->notNull(),
            'unit' => $this->string(50)->notNull()->defaultValue('M2'),
            'method_id' => $this->integer()->notNull(),
            'type_id' => $this->integer()->notNull(),
            'medicine_name' => $this->string(255)->notNull(),
            'dosage' => $this->string(50)->notNull(),
            'time' => $this->integer(),
            'date_event' => $this->integer()->notNull(),
            'report_date' => $this->integer()->notNull(),
            'create_user_id' => $this->integer()->notNull(),
            'start_processing' => $this->string(255),
            'end_processing' => $this->string(255),
            'exposition_time' => $this->time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%worksheet_disinfections}}');
    }
}
