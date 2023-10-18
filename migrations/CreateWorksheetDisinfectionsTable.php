<?php
use yii\db\Migration;

class CreateWorksheetDisinfectionsTable extends Migration
{
    public function up()
    {
        $this->createTable('worksheet_disinfections', [
            'id' => $this->primaryKey(),
            'object_id' => $this->integer(),
            'type' => $this->string(255)->notNull(),
            'organization_name'=> $this->string(255),
            'adress' => $this->string(255),
            'boxs' => $this->text()->notNull(),
            'area_all' => $this->double()->notNull(),
            'unit' => $this->string(50)->notNull('м2'),
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
        /*Schema::create('worksheet_disinfections', function (Blueprint $table) {
            $table->id();
            $table->integer('object_id');
            $table->string('type', 255)->nullable();
            $table->string('organization_name', 255)->nullable();
            $table->string('adress', 255)->nullable();
            $table->text('boxs');
            $table->double('area_all');
            $table->string('unit', 50)->default('м²');
            $table->integer('method_id');
            $table->integer('type_id');
            $table->string('medicine_name', 255);
            $table->string('dosage', 50);
            $table->integer('time')->nullable();
            $table->integer('date_event');
            $table->integer('report_date');
            $table->integer('create_user_id');
            $table->string('start_processing', 255)->nullable();
            $table->string('end_processing', 255)->nullable();
            $table->time('exposition_time')->nullable();
        });*/
    }

    public function down()
    {
        $this->dropTable("worksheet_disinfections");
    }
}
