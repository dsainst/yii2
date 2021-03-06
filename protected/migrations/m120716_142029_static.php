<?php

class m120716_142029_static extends CDbMigration
{
    public function up()
    {
        $this->createTable('tbl_staticpage', array(
            'id' => 'pk',
            'parent_id' => 'int DEFAULT null',
            'title' => 'varchar(255)',
            'content' => 'text',
            'sorting' => 'int DEFAULT 0',
        ), "Engine=InnoDB CHARACTER SET utf8");
        $this->addForeignKey("parent_page", "tbl_staticpage", "parent_id", "tbl_staticpage", "id", null, "CASCADE");
        $this->createIndex("page_sorting", "tbl_staticpage", "sorting");
    }

    public function down()
    {
        $this->dropTable('tbl_staticpage');
        return false;
    }

    /*
     // Use safeUp/safeDown to do migration with transaction
     public function safeUp()
     {
     }

     public function safeDown()
     {
     }
     */
}