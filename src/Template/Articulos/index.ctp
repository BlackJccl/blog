<h2>Benvenido </h2>
<?= $this->Form->create($articulos);?>
<fieldset>
    <legend>Registrar Articulo</legend>
    <?= $this->Form->input('titulo',['label'=>'Titulo']);?>
    <?= $this->Form->input('etiquetas',['label'=>'Etiquetas']);?>
    <?= $this->Form->textarea('contenido',['label'=>'Contenido']);?>
    <?= $this->Form->submit('Registrar'); ?>
    <?= $this->Form->button('Limpiar',['type'=>'reset']); ?>
</fieldset>
<br>
<table border="1" width="100%" class="table table-condensed table-bordered table-hover tabla-font table-striped">
    <caption>Lista de Articlos</caption>
    <colgroup>
        <col width="80"/>
        <col/>
        <col/>
        <col/>
        <col width="80"/>
        <col width="80"/>
    </colgroup>
    <thead>
        <th>Id</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Fecha</th>
        <th>Tag</th>
        <th></th>
    </thead>
    <tbody>
    <?php
        foreach ($articulos as $articulo) {
    ?>
        <tr>
            <td><?= $articulo->idArticulo ?></td>
            <td><?= $articulo->titulo ?></td>
            <td></td>
            <td><?= $articulo->fecha ?></td>
            <td><?= $articulo->tags ?></td>
            <td><?= $this->Html->link('Mostrar', [$articulo->idArticulo], array('class' => 'btn btn-sm btn-default')) ?></td>
        </tr>
    <?php
        }
    ?>
   </tbody>
</table>

