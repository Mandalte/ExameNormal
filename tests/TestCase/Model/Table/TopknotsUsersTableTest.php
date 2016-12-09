<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TopknotsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TopknotsUsersTable Test Case
 */
class TopknotsUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TopknotsUsersTable
     */
    public $TopknotsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.topknots_users',
        'app.topknots',
        'app.users',
        'app.users_topknot'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TopknotsUsers') ? [] : ['className' => 'App\Model\Table\TopknotsUsersTable'];
        $this->TopknotsUsers = TableRegistry::get('TopknotsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TopknotsUsers);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
