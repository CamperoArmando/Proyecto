

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Hacer una Reservación</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('reservations.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="reservation_date">Fecha:</label>
            <input type="date" id="reservation_date" name="reservation_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="reservation_time">Hora:</label>
            <input type="time" id="reservation_time" name="reservation_time" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="guest_number">Número de invitados:</label>
            <input type="number" id="guest_number" name="guest_number" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Reservar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reservaciones\resources\views/reservations/create.blade.php ENDPATH**/ ?>