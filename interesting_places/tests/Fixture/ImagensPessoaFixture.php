<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImagensPessoaFixture
 *
 */
class ImagensPessoaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'imagens_pessoa';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'path' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'pessoa_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'lugar_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_indexes' => [
            'imagens_pessoa_fkindex2' => ['type' => 'index', 'columns' => ['pessoa_id'], 'length' => []],
            'ifk_rel_15' => ['type' => 'index', 'columns' => ['pessoa_id'], 'length' => []],
            'imagens_pessoa_fkindex1' => ['type' => 'index', 'columns' => ['lugar_id'], 'length' => []],
            'ifk_rel_14' => ['type' => 'index', 'columns' => ['lugar_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'imagens_pessoa_lugar_id_fkey' => ['type' => 'foreign', 'columns' => ['lugar_id'], 'references' => ['lugar', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'imagens_pessoa_pessoa_id_fkey' => ['type' => 'foreign', 'columns' => ['pessoa_id'], 'references' => ['pessoa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'path' => 'Lorem ipsum dolor sit amet',
            'pessoa_id' => 1,
            'lugar_id' => 1
        ],
    ];
}
