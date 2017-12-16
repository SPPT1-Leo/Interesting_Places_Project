<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrivilegeFixture
 *
 */
class PrivilegeFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'privilege';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'role_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'resource_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'permission' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        '_indexes' => [
            'privilege_fkindex1' => ['type' => 'index', 'columns' => ['role_id'], 'length' => []],
            'ifk_rel_09' => ['type' => 'index', 'columns' => ['role_id'], 'length' => []],
            'privilege_fkindex2' => ['type' => 'index', 'columns' => ['resource_id'], 'length' => []],
            'ifk_rel_10' => ['type' => 'index', 'columns' => ['resource_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'privilege_resource_id_fkey' => ['type' => 'foreign', 'columns' => ['resource_id'], 'references' => ['resource', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'privilege_role_id_fkey' => ['type' => 'foreign', 'columns' => ['role_id'], 'references' => ['role', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'role_id' => 1,
            'resource_id' => 1,
            'permission' => 1
        ],
    ];
}
