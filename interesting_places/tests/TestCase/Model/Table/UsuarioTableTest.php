<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuarioTable Test Case
 */
class UsuarioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuarioTable
     */
    public $Usuario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuario',
        'app.role',
        'app.privilege',
        'app.resource',
        'app.action',
        'app.controller',
        'app.pessoa',
        'app.enderecos',
        'app.comentario',
        'app.imagens_pessoa',
        'app.lugar',
        'app.tipo_lugar',
        'app.tipos',
        'app.endereco',
        'app.cidade',
        'app.uf',
        'app.imagens_lugar',
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
        $config = TableRegistry::exists('Usuario') ? [] : ['className' => UsuarioTable::class];
        $this->Usuario = TableRegistry::get('Usuario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usuario);

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
