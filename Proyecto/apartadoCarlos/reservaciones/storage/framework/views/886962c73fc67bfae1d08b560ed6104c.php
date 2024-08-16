

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Reservaciones</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('reservations.create')); ?>" class="btn btn-primary">Hacer una Reservación</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Número de invitados</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($reservation->name); ?></td>
                <td><?php echo e($reservation->email); ?></td>
                <td><?php echo e($reservation->phone); ?></td>
                <td><?php echo e($reservation->reservation_date); ?></td>
                <td><?php echo e($reservation->reservation_time); ?></td>
                <td><?php echo e($reservation->guest_number); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reservaciones\resources\views/reservations/index.blade.php ENDPATH**/ ?>