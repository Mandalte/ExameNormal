<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTopknotsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTopknotsTable Test Case
 */
class UsersTopknotsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTopknotsTable
     */
    public $UsersTopknots;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_topknots',
        'app.users',
        'app.topknots',
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
        $config = TableRegistry::exists('UsersTopknots') ? [] : ['className' => 'App\Model\Table\UsersTopknotsTable'];
        $this->UsersTopknots = TableRegistry::get('UsersTopknots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersTopknots);

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
