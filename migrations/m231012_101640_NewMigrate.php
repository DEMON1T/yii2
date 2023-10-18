<?php

use yii\db\Migration;

//class m231012_101640_NewMigrate extends Migration
//{
//        public function up()
//    {
//        $this->alterColumn('User', 'status', $this->boolean()->defaultValue(0));
//    }
//
//        public function down()
//    {
//        $this->dropColumn('User', 'status');
//    }
    class m231012_101640_NewMigrate extends Migration
    {
    public function safeUp()
    {
        $this->createTable('profile', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string()->notNull(),
            'phone' => $this->string(),
            'gender' => $this->string(),
            'address' => $this->string(),
            'user_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-profile-user_id',
            'profile',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-profile-user_id', 'profile');
        $this->dropTable('profile');
    }
}
