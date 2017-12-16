<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cnpj_cpf
 * @property int $endereco_id
 * @property string $email
 * @property string $telefone_1
 * @property string $telefone_2
 *
 * @property \App\Model\Entity\Endereco $endereco
 * @property \App\Model\Entity\Comentario[] $comentario
 * @property \App\Model\Entity\ImagensPessoa[] $imagens_pessoa
 * @property \App\Model\Entity\Notum[] $nota
 * @property \App\Model\Entity\Usuario[] $usuario
 */
class Pessoa extends Entity
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
        'nome' => true,
        'cnpj_cpf' => true,
        'endereco_id' => true,
        'email' => true,
        'telefone_1' => true,
        'telefone_2' => true,
        'endereco' => true,
        'comentario' => true,
        'imagens_pessoa' => true,
        'nota' => true,
        'usuario' => true
    ];
}
