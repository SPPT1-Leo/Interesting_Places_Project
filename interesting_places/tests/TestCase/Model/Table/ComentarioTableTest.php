<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComentarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComentarioTable Test Case
 */
class ComentarioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ComentarioTable
     */
    public $Comentario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.comentario',
        'app.pessoa',
        'app.imagens_pessoa'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Comentario') ? [] : ['className' => ComentarioTable::class];
        $this->Comentario = TableRegistry::get('Comentario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Comentario);

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
