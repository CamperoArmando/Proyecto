

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Comentarios</h1>
    <a href="<?php echo e(route('comments.create')); ?>" class="btn btn-primary">Agregar Comentario</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Cliente</th>
                <th>Comentario</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($comment->id); ?></td>
                <td><?php echo e($comment->customer_name); ?></td>
                <td><?php echo e($comment->comment); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoArq\resources\views/comments/index.blade.php ENDPATH**/ ?>