<?php $__env->startSection('content'); ?>
<h1>Welcome <?php echo e(Auth::user()->email); ?></h1>
<a href="<?php echo e(route('logout')); ?>">Log Out</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\indo-cemara\resources\views/user/dashboard.blade.php ENDPATH**/ ?>