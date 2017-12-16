<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ImagensPessoa Entity
 *
 * @property int $id
 * @property string $path
 * @property int $pessoa_id
 * @property int $lugar_id
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 * @property \App\Model\Entity\Lugar $lugar
 * @property \App\Model\Entity\Comentario[] $comentario
 */
class ImagensPessoa extends Entity
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
        'path' => true,
        'pessoa_id' => true,
        'lugar_id' => true,
        'pessoa' => true,
        'lugar' => true,
        'comentario' => true
    ];
}
