<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TravelsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TravelsUsersTable Test Case
 */
class TravelsUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TravelsUsersTable
     */
    public $TravelsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.travels_users',
        'app.travels',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TravelsUsers') ? [] : ['className' => 'App\Model\Table\TravelsUsersTable'];
        $this->TravelsUsers = TableRegistry::get('TravelsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TravelsUsers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
