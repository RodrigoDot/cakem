<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Adres Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $nome_endereco
 * @property string $cep
 * @property string $rua
 * @property int $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $ibge
 *
 * @property \App\Model\Entity\User $user
 */
class Adres extends Entity
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
        '*' => true,
        'id' => false
    ];
}
