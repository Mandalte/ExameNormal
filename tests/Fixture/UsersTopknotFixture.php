<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersTopknotFixture
 *
 */
class UsersTopknotFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'users_topknot';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'topknot_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'description' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'tag_idx' => ['type' => 'index', 'columns' => ['user_id', 'topknot_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['topknot_id', 'user_id'], 'length' => []],
            'topknot_key' => ['type' => 'foreign', 'columns' => ['topknot_id'], 'references' => ['topknots', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'userr_key' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'user_id' => 1,
            'topknot_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
