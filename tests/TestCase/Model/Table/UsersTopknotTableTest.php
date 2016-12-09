<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTopknotTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTopknotTable Test Case
 */
class UsersTopknotTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTopknotTable
     */
    public $UsersTopknot;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_topknot',
        'app.users',
        'app.topknots'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersTopknot') ? [] : ['className' => 'App\Model\Table\UsersTopknotTable'];
        $this->UsersTopknot = TableRegistry::get('UsersTopknot', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersTopknot);

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
