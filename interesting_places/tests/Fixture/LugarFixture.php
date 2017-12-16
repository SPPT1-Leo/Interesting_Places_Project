<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LugarFixture
 *
 */
class LugarFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'lugar';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'tipo_lugar_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tipo_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'endereco_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'site' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'telefone_1' => ['type' => 'string', 'length' => 25, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'telefone_2' => ['type' => 'string', 'length' => 25, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'facebook' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'instagram' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'whatsapp' => ['type' => 'string', 'length' => 25, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'lugar_fkindex1' => ['type' => 'index', 'columns' => ['tipo_lugar_id'], 'length' => []],
            'ifk_rel_03' => ['type' => 'index', 'columns' => ['tipo_lugar_id'], 'length' => []],
            'lugar_fkindex2' => ['type' => 'index', 'columns' => ['endereco_id'], 'length' => []],
            'ifk_rel_04' => ['type' => 'index', 'columns' => ['endereco_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'lugar_endereco_id_fkey' => ['type' => 'foreign', 'columns' => ['endereco_id'], 'references' => ['endereco', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'lugar_tipo_lugar_id_fkey' => ['type' => 'foreign', 'columns' => ['tipo_lugar_id'], 'references' => ['tipo_lugar', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'tipo_lugar_id' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'tipo_id' => 1,
            'endereco_id' => 1,
            'site' => 'Lorem ipsum dolor sit amet',
            'telefone_1' => 'Lorem ipsum dolor sit a',
            'telefone_2' => 'Lorem ipsum dolor sit a',
            'facebook' => 'Lorem ipsum dolor sit amet',
            'instagram' => 'Lorem ipsum dolor sit amet',
            'whatsapp' => 'Lorem ipsum dolor sit a'
        ],
    ];
}
