<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrivilegeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrivilegeTable Test Case
 */
class PrivilegeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrivilegeTable
     */
    public $Privilege;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.privilege',
        'app.role',
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
        $config = TableRegistry::exists('Privilege') ? [] : ['className' => PrivilegeTable::class];
        $this->Privilege = TableRegistry::get('Privilege', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Privilege);

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
