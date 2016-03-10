<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class ArticulosTable extends Table{
    public function initialize(array $config) {
        $this->table('articulo');
        $this->primaryKey('idArticulo');
        $this->entityClass('App\Model\Entity\Articulo');
        
        $this->belongsTo('Usuarios',[
            'className' => 'Usuarios',
            'foreignKey'=>'idusuario',
            'propertyName'=>'Usuario']);
        
        $this->hasMany('Comentarios',[
            'className' => 'Comentarios',
            'foreignKey'=>'idArticulo',
            'propertyName'=>'Comentario']);
    }
}

?>
