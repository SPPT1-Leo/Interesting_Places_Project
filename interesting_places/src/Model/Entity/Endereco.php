<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id
 * @property string $logradouro
 * @property string $bairro
 * @property string $cep
 * @property int $cidade_id
 * @property int $numero
 * @property string $complemento
 *
 * @property \App\Model\Entity\Cidade $cidade
 * @property \App\Model\Entity\Lugar[] $lugar
 * @property \App\Model\Entity\Pessoa[] $pessoa
 */
class Endereco extends Entity
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
        'logradouro' => true,
        'bairro' => true,
        'cep' => true,
        'cidade_id' => true,
        'numero' => true,
        'complemento' => true,
        'cidade' => true,
        'lugar' => true,
        'pessoa' => true
    ];
}
