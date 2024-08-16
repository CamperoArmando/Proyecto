<!DOCTYPE html>
<html>
<head>
    <title>Editar Plato</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
    <h1>Editar Plato</h1>
    <form action="<?php echo e(route('platos.update', $plato->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo e($plato->nombre); ?>" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"><?php echo e($plato->descripcion); ?></textarea>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="<?php echo e($plato->precio); ?>" step="0.01" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\mi_restaurante\resources\views/platos/edit.blade.php ENDPATH**/ ?>