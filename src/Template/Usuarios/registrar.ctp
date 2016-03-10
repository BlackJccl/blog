<?= $this->Form->create($usuario);?>
<fieldset>
    <legend>Registrar Usuario</legend>
    <?= $this->Form->input('username',['label'=>'Usuario']);?>
    <?= $this->Form->input('password',['label'=>'Contraseña']);?>
    <?= $this->Form->input('password',['label'=>'Repetir Contraseña']);?>
    <?= $this->Form->input('nombres',['label'=>'Nombres']);?>
    <?= $this->Form->input('email',['label'=>'Correo']);?>
    <?= $this->Form->input('foto',['type'=>'file','label'=>'Foto']);?>
    <?= $this->Form->submit('Registrar'); ?>
    <?= $this->Form->button('Limpiar',['type'=>'reset']); ?>
</fieldset>
