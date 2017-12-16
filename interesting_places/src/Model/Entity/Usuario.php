<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property int $role_id
 * @property string $login
 * @property string $senha
 * @property int $pessoa_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class Usuario extends Entity
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
        'login' => true,
        'senha' => true,
        'pessoa_id' => true,
        'role' => true,
        'pessoa' => true
    ];
}
