<?php 

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher; // necesario para encriptar contraseña en registro

class User extends Entity
{
    /** Especificar campos a ser accesibles */
    public $_accessible = [
        /** se asigna valor de true para todos los campos que se desean
         * obtener de la BD */
        'id' => true,
        'name' => true,
        'email' => true,
        'username' => true,
        'password' => true,
        'created' => true,
        'modified' => true
    ];

    /** En Registro de Usuario, encriptar contraseña, el atributo debe coincidir 
     * con el nombre del campo en la BD */
    protected function _setPassword($password)
    {
        if (strlen($password) > 5) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}