<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('full_name','string',array('limit'=>255))
              ->addColumn('document_namber','string',array('limit'=>50))
              ->addColumn('phone_nember','integer',array('limit'=>15))
              ->addColumn('family_phone_namber','integer',array('limit'=>15))
              ->addColumn('email','string',array('limit'=>255))
              ->addColumn('password','string')
              ->addColumn('role','enum',array('values'=>'admin,user'))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->create();
    }
}
