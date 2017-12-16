<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagensPessoaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagensPessoaTable Test Case
 */
class ImagensPessoaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagensPessoaTable
     */
    public $ImagensPessoa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagens_pessoa',
        'app.pessoa',
        'app.lugar',
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
        $config = TableRegistry::exists('ImagensPessoa') ? [] : ['className' => ImagensPessoaTable::class];
        $this->ImagensPessoa = TableRegistry::get('ImagensPessoa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImagensPessoa);

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
