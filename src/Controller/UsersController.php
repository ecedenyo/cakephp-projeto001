<?php 

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
        // $usuario = "Cesar";
        // $this->set(['usuarios' => $usuario]);

        // Consultando datos de la BD
        $usuarios = $this->Users->find()->all();

        // $this->set(['usuarios' => $usuarios]);
        $this->set(compact('usuarios')); // mediante esta sentencia se pueden enviar a la Vista tantas variables como sean necesarias como parámetros de la función compact(...)
    }
}