<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UfTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UfTable Test Case
 */
class UfTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UfTable
     */
    public $Uf;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.uf',
        'app.cidade',
        'app.endereco',
        'app.lugar',
        'app.tipo_lugar',
        'app.tipos',
        'app.imagens_lugar',
        'app.imagens_pessoa',
        'app.pessoa',
        'app.enderecos',
        'app.comentario',
        'app.nota',
        'app.usuario'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Uf') ? [] : ['className' => UfTable::class];
        $this->Uf = TableRegistry::get('Uf', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Uf);

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
