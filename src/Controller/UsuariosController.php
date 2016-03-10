<?php
namespace App\Controller;
class UsuariosController {
    public function registrar() {
    $usuario = $this->Usuarios->newEntity();
    $this->set('usuario',$usuario);
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario,  $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success('Registro Guardado');
                $this->redirect(['action'=>'index']);
            }  else {
                $this->Flash->error('Error no Guardado');
            }
        }
    }
}
