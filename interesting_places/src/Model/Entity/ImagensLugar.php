<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ImagensLugar Entity
 *
 * @property int $id
 * @property int $lugar_id
 * @property string $path
 *
 * @property \App\Model\Entity\Lugar $lugar
 */
class ImagensLugar extends Entity
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
        'lugar_id' => true,
        'path' => true,
        'lugar' => true
    ];
}
