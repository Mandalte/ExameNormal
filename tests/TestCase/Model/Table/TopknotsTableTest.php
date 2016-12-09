<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TopknotsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TopknotsTable Test Case
 */
class TopknotsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TopknotsTable
     */
    public $Topknots;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Topknots') ? [] : ['className' => 'App\Model\Table\TopknotsTable'];
        $this->Topknots = TableRegistry::get('Topknots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Topknots);

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
