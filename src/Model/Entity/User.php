<?php 

namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{
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
    ]
}