<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResourceFixture
 *
 */
class ResourceFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'resource';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'action_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'controller_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_indexes' => [
            'resource_fkindex1' => ['type' => 'index', 'columns' => ['action_id'], 'length' => []],
            'ifk_rel_07' => ['type' => 'index', 'columns' => ['action_id'], 'length' => []],
            'resource_fkindex2' => ['type' => 'index', 'columns' => ['controller_id'], 'length' => []],
            'ifk_rel_08' => ['type' => 'index', 'columns' => ['controller_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'resource_action_id_fkey' => ['type' => 'foreign', 'columns' => ['action_id'], 'references' => ['action', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'resource_controller_id_fkey' => ['type' => 'foreign', 'columns' => ['controller_id'], 'references' => ['controller', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'action_id' => 1,
            'controller_id' => 1
        ],
    ];
}
