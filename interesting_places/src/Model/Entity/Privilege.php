<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Privilege Entity
 *
 * @property int $id
 * @property int $role_id
 * @property int $resource_id
 * @property bool $permission
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Resource $resource
 */
class Privilege extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'role_id' => true,
        'resource_id' => true,
        'permission' => true,
        'role' => true,
        'resource' => true
    ];
}
