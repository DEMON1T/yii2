<?php

use yii\db\Migration;

class m231012_101640_NewMigrate extends Migration
{
        public function up()
    {
        $this->alterColumn('User', 'status', $this->boolean()->defaultValue(0));
    }

        public function down()
    {
        $this->dropColumn('User', 'status');
    }

}
