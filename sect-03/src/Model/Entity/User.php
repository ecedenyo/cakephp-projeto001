<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher; // necesario para encriptar contraseña en registro

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $username
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Article[] $articles
 */
class User extends Entity
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
        'name' => true,
        'email' => true,
        'username' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'articles' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    /** En Registro de Usuario, encriptar contraseña, el atributo debe coincidir 
     * con el nombre del campo en la BD 
     * _set{nombre-campo-en-bd-a-alterar} 
     * $nombre-parametro a de coincidir con el nombre del campo en el form */
    protected function _setPassword($password)
    {
        if (strlen($password) > 5) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
