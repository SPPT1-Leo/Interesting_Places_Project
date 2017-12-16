<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notum Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $horario
 * @property int $pessoa_id
 * @property int $lugar_id
 * @property int $valor
 * @property string $resenha
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 * @property \App\Model\Entity\Lugar $lugar
 */
class Notum extends Entity
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
        'horario' => true,
        'pessoa_id' => true,
        'lugar_id' => true,
        'valor' => true,
        'resenha' => true,
        'pessoa' => true,
        'lugar' => true
    ];
}
