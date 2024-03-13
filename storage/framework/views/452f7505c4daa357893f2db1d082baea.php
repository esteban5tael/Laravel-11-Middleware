<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h3'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card m-5">
        <div class="card-header">
            <div class="card-title text-center">
                <h3><?php echo e(config('app.name')); ?></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="card-text text-center">
                <?php if(auth()->guard()->check()): ?>
                    <a
                    class="btn btn-secondary "
                    href="<?php echo e(route('admin.index')); ?>">Admin</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-footer">
            <div class="card-text text-center">
                <?php echo e(config('app.name')); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\LaravelMiddleware\resources\views/index.blade.php ENDPATH**/ ?>