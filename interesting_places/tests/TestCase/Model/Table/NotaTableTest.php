<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotaTable Test Case
 */
class NotaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotaTable
     */
    public $Nota;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nota',
        'app.pessoa',
        'app.lugar',
        'app.tipo_lugar',
        'app.tipos',
        'app.endereco',
        'app.cidade',
        'app.uf',
        'app.imagens_lugar',
        'app.imagens_pessoa',
        'app.comentario'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Nota') ? [] : ['className' => NotaTable::class];
        $this->Nota = TableRegistry::get('Nota', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nota);

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
