<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class UsuariosTable extends Table {
    public function initialize(array $config) {
        $this->table('usuario');
        $this->primaryKey('id');
        $this->entityClass('App\Model\Entity\Usuario');
    }
}

