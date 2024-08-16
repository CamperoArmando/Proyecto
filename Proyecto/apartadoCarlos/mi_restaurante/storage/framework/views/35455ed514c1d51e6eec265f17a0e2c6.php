<!DOCTYPE html>
<html>
<head>
    <title>Lista de Platos</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
    <h1>Lista de Platos</h1>
    <a href="<?php echo e(route('platos.create')); ?>">Agregar Nuevo Plato</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $platos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($plato->nombre); ?></td>
                    <td><?php echo e($plato->descripcion); ?></td>
                    <td><?php echo e($plato->precio); ?></td>
                    <td>
                        <a href="<?php echo e(route('platos.show', $plato->id)); ?>">Ver</a>
                        <a href="<?php echo e(route('platos.edit', $plato->id)); ?>">Editar</a>
                        <form action="<?php echo e(route('platos.destroy', $plato->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\mi_restaurante\resources\views/platos/index.blade.php ENDPATH**/ ?>