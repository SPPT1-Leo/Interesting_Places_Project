<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControllerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControllerTable Test Case
 */
class ControllerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ControllerTable
     */
    public $Controller;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.controller',
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
        $config = TableRegistry::exists('Controller') ? [] : ['className' => ControllerTable::class];
        $this->Controller = TableRegistry::get('Controller', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Controller);

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
