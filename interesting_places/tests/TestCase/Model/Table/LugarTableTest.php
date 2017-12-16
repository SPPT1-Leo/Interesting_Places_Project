<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LugarTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LugarTable Test Case
 */
class LugarTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LugarTable
     */
    public $Lugar;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lugar',
        'app.tipo_lugar',
        'app.tipos',
        'app.endereco',
        'app.cidade',
        'app.uf',
        'app.pessoa',
        'app.imagens_lugar',
        'app.imagens_pessoa',
        'app.comentario',
        'app.nota'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Lugar') ? [] : ['className' => LugarTable::class];
        $this->Lugar = TableRegistry::get('Lugar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lugar);

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
