<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagensLugarTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagensLugarTable Test Case
 */
class ImagensLugarTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagensLugarTable
     */
    public $ImagensLugar;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagens_lugar',
        'app.lugar'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ImagensLugar') ? [] : ['className' => ImagensLugarTable::class];
        $this->ImagensLugar = TableRegistry::get('ImagensLugar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImagensLugar);

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
