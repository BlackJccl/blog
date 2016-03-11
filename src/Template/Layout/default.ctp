<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Blog App |
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="header-master container-fluid">
            <div class="row">
              <?= $this->Html->image('logo.png',['alt'=>'Blog'])?>
            </div>
        </div>
    </header>
    <aside class="menupr">
        <nav class="menu_subitem">
            <ul class="menu_item">
                <li><?=$this->Html->link('Registro Usuario', '/usuarios/registrar') ?></li>
                <li><a>Ingreso</a></li>
                <li><a>Articulos</a></li>
                <li><a>Mostrar</a></li>
            </ul>
        </nav>
    </aside>
    <div class="contenido">
        <aside>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </aside>
    </div>
</body>
</html>
