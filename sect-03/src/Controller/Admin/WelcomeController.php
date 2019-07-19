<?php 
namespace App\Controller\Admin;

use App\Controller\AppController;

class WelcomeController extends AppController
{
    public function index()
    {
        /** Obtener datos del usuario logeado */
        $user = $this->Auth->user();

        /** Enviar datos a la plantilla */
        $this->set(compact('user'));
    }
}
