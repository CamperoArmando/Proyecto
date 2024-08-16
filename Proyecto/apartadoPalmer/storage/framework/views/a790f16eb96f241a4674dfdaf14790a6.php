<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Bienvenido, <?php echo e(Auth::user()->name); ?>!</h1>
    <p>Esta es tu página de inicio.</p>

    <div class="card mt-4">
        <div class="card-header">Panel de Control</div>
        <div class="card-body">
            <p>Accede a las diferentes secciones del sistema a través del menú superior.</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoArq\resources\views/home.blade.php ENDPATH**/ ?>