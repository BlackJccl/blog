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
    <aside>
    <nav>
        <ul>
            <li>Registro Usuario</li>
            <li>Ingreso</li>
            <li>Articulos</li>
            <li>Mostrar</li>
        </ul>
    </nav>
</aside>
    <div class="container">
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
    </div>
</body>
</html>
