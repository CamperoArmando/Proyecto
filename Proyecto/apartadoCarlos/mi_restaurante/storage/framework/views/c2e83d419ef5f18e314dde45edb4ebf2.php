<!DOCTYPE html>
<html>
<head>
    <title>Ver Plato</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
    <h1>Detalles del Plato</h1>
    <p><strong>Nombre:</strong> <?php echo e($plato->nombre); ?></p>
    <p><strong>Descripción:</strong> <?php echo e($plato->descripcion); ?></p>
    <p><strong>Precio:</strong> <?php echo e($plato->precio); ?></p>
    <a href="<?php echo e(route('platos.index')); ?>">Regresar a la lista</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\mi_restaurante\resources\views/platos/show.blade.php ENDPATH**/ ?>