<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class ComentariosTable extends Table{
    public function initialize(array $config) {
        $this->table('comentario');
        $this->primaryKey('idComentario');
        $this->entityClass('App\Model\Entity\Comentario');
        
        $this->belongsTo('Articulos',[
            'className' => 'Articulos',
            'foreignKey' => 'idArticulo',
            'propertyName' => 'Articulo'
        ]);
        
        $this->belongsTo('Usuarios',[
            'className' => 'Usuarios',
            'foreignKey'=>'idusuario',
            'propertyName'=>'Usuario']);
    }    
}

