<?php
use Migrations\AbstractMigration;

class CreateTravelsUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('travels_users');
        $table->addColumn('space_number', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('volume', 'decimal', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('weight', 'decimal', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('total_price', 'decimal', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
        $refTable = $this->table('travels_users');
        $refTable->addColumn('travel_id','integer',array('signed'=>'disable'))
                 ->addForeignKey('travel_id','travels','id',array('delete'=>'CASCADE','update'=>'NO_ACTION'))
                 ->update();
        $refTable = $this->table('travels_users');
        $refTable->addColumn('user_id','integer',array('signed'=>'disable'))
                 ->addForeignKey('user_id','users','id',array('delete'=>'CASCADE','update'=>'NO_ACTION'))
                 ->update();

    }
}
