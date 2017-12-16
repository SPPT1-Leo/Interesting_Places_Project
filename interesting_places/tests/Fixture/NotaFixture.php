<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotaFixture
 *
 */
class NotaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'nota';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'horario' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'pessoa_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'lugar_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'valor' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'resenha' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'nota_fkindex2' => ['type' => 'index', 'columns' => ['pessoa_id'], 'length' => []],
            'ifk_rel_13' => ['type' => 'index', 'columns' => ['pessoa_id'], 'length' => []],
            'ifk_rel_12' => ['type' => 'index', 'columns' => ['lugar_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'nota_unique' => ['type' => 'unique', 'columns' => ['pessoa_id', 'lugar_id'], 'length' => []],
            'nota_fkindex1' => ['type' => 'unique', 'columns' => ['lugar_id'], 'length' => []],
            'nota_lugar_id_fkey' => ['type' => 'foreign', 'columns' => ['lugar_id'], 'references' => ['lugar', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'nota_pessoa_id_fkey' => ['type' => 'foreign', 'columns' => ['pessoa_id'], 'references' => ['pessoa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'horario' => 1508546425,
            'pessoa_id' => 1,
            'lugar_id' => 1,
            'valor' => 1,
            'resenha' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
