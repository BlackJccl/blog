<?php
namespace App\Controller;
class ArticulosController extends AppController{
    public function index() {
        $query = $this->Articulos->find();
        $this->set('articulos', $query);
    }
    public function registrar() {
        $articulo = $this->Articulos->newEntity();
        $this->set('articulo', $articulo);
        if($this->request->is('post')){
            $articulo = $this->Articulos->patchEntity($articulo, $this->request->data);
            if( $this->Articulos->save($articulo) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }

        }
    }
}
