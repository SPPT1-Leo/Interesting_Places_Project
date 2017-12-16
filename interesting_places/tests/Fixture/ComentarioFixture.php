<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComentarioFixture
 *
 */
class ComentarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'comentario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'desc_2' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'pessoa_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'imagens_pessoa_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'horario' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        '_indexes' => [
            'comentario_fkindex1' => ['type' => 'index', 'columns' => ['pessoa_id'], 'length' => []],
            'ifk_rel_16' => ['type' => 'index', 'columns' => ['pessoa_id'], 'length' => []],
            'comentario_fkindex2' => ['type' => 'index', 'columns' => ['imagens_pessoa_id'], 'length' => []],
            'ifk_rel_17' => ['type' => 'index', 'columns' => ['imagens_pessoa_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'comentario_imagens_pessoa_id_fkey' => ['type' => 'foreign', 'columns' => ['imagens_pessoa_id'], 'references' => ['imagens_pessoa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'comentario_pessoa_id_fkey' => ['type' => 'foreign', 'columns' => ['pessoa_id'], 'references' => ['pessoa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'desc_2' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'pessoa_id' => 1,
            'imagens_pessoa_id' => 1,
            'horario' => 1508546423
        ],
    ];
}
