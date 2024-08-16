<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?php echo e(route('reservations.index')); ?>">Reservaciones</a></li>
            <li><a href="<?php echo e(route('reservations.create')); ?>">Hacer una Reservación</a></li>
        </ul>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>&copy; 2024 Reservaciones. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\reservaciones\resources\views/layouts/app.blade.php ENDPATH**/ ?>