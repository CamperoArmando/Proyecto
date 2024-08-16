

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Agregar Comentario</h1>
    <form action="<?php echo e(route('comments.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="customer_name">Nombre del Cliente</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="comment">Comentario</label>
            <textarea name="comment" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoArq\resources\views/comments/create.blade.php ENDPATH**/ ?>