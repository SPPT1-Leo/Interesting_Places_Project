<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoLugarTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoLugarTable Test Case
 */
class TipoLugarTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoLugarTable
     */
    public $TipoLugar;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_lugar',
        'app.lugar',
        'app.tipos',
        'app.endereco',
        'app.cidade',
        'app.uf',
        'app.pessoa',
        'app.enderecos',
        'app.comentario',
        'app.imagens_pessoa',
        'app.nota',
        'app.usuario',
        'app.imagens_lugar'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoLugar') ? [] : ['className' => TipoLugarTable::class];
        $this->TipoLugar = TableRegistry::get('TipoLugar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoLugar);

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
