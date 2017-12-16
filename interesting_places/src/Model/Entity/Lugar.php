<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lugar Entity
 *
 * @property int $id
 * @property int $tipo_lugar_id
 * @property string $nome
 * @property int $tipo_id
 * @property int $endereco_id
 * @property string $site
 * @property string $telefone_1
 * @property string $telefone_2
 * @property string $facebook
 * @property string $instagram
 * @property string $whatsapp
 *
 * @property \App\Model\Entity\TipoLugar $tipo_lugar
 * @property \App\Model\Entity\Tipo $tipo
 * @property \App\Model\Entity\Endereco $endereco
 * @property \App\Model\Entity\ImagensLugar[] $imagens_lugar
 * @property \App\Model\Entity\ImagensPessoa[] $imagens_pessoa
 * @property \App\Model\Entity\Notum[] $nota
 */
class Lugar extends Entity
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
        'tipo_lugar_id' => true,
        'nome' => true,
        'tipo_id' => true,
        'endereco_id' => true,
        'site' => true,
        'telefone_1' => true,
        'telefone_2' => true,
        'facebook' => true,
        'instagram' => true,
        'whatsapp' => true,
        'tipo_lugar' => true,
        'tipo' => true,
        'endereco' => true,
        'imagens_lugar' => true,
        'imagens_pessoa' => true,
        'nota' => true
    ];
}
