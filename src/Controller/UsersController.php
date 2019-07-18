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

        /** Consultando datos de la BD, sin paginar */
        // $usuarios = $this->Users->find()->all();
        
        /** Consultando datos de la BD, paginando */
        $usuarios = $this->paginate($this->Users);

        // $this->set(['usuarios' => $usuarios]);
        $this->set(compact('usuarios')); // mediante esta sentencia se pueden enviar a la Vista tantas variables como sean necesarias como parámetros de la función compact(...)
    }

    public function view($id = null)
    {
        $usuario = $this->Users->get($id);

        $this->set(['usuario' => $usuario]);
    }

    public function add()
    {
        /** Instanciar entidad para manipular datos bajo creación */
        $user = $this->Users->newEntity();

        /** En caso de envío de formulario */
        if($this->request->is('post')){
            /** Validar datos */
            $user = $this->Users->patchEntity($user, $this->request->getData());
            
            /** Verificar valores que se están asignado (Debug) */
            // debug($user);
            // exit;

            /** Salvar en BD */
            if($this->Users->save($user)){
                /** Mensaje en caso de no haber errores */
                $this->Flash->success(__('Usuário cadastrado com sucesso'));
                
                return $this->redirect(['action' => 'index']);
            } else {
                /** Mensaje en caso de haber errores */
                $this->Flash->error(__('Erro: Usuário não foi cadastrado com sucesso'));
            }
        }

        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id);

        if($this->request->is(['post', 'put'])){
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if($this->Users->save($user)){
                /** Mensaje en caso de no haber errores */
                $this->Flash->success(__('Usuário editado com sucesso'));
                
                return $this->redirect(['action' => 'index']);
            } else {
                /** Mensaje en caso de haber errores */
                $this->Flash->error(__('Erro: Usuário não foi editado com sucesso'));
            }
        }

        $this->set(compact('user'));
    }
}