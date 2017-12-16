<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comentario Entity
 *
 * @property int $id
 * @property string $desc_2
 * @property int $pessoa_id
 * @property int $imagens_pessoa_id
 * @property \Cake\I18n\FrozenTime $horario
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 * @property \App\Model\Entity\ImagensPessoa $imagens_pessoa
 */
class Comentario extends Entity
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
        'desc_2' => true,
        'pessoa_id' => true,
        'imagens_pessoa_id' => true,
        'horario' => true,
        'pessoa' => true,
        'imagens_pessoa' => true
    ];
}
