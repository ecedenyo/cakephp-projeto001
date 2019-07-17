<?php 

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
        // $usuario = "Cesar";
        // $this->set(['usuarios' => $usuario]);

        $this->paginate = [
            'limit' => 20,
            'order' => [
                'Users.id' => 'asc'
            ]
        ];

        // Consultando datos de la BD, sin paginar
        // $usuarios = $this->Users->find()->all();
        
        // Consultando datos de la BD, paginando
        $usuarios = $this->paginate($this->Users);

        // $this->set(['usuarios' => $usuarios]);
        $this->set(compact('usuarios')); // mediante esta sentencia se pueden enviar a la Vista tantas variables como sean necesarias como parámetros de la función compact(...)
    }
}