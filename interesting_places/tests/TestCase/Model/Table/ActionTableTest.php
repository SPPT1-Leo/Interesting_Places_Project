<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActionTable Test Case
 */
class ActionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActionTable
     */
    public $Action;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.action',
        'app.resource'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Action') ? [] : ['className' => ActionTable::class];
        $this->Action = TableRegistry::get('Action', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Action);

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
}
