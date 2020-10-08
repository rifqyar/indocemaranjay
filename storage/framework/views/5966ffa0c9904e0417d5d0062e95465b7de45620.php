<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- Scripts -->
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo e(asset('js/sweetalert.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/materialize.js')); ?>"></script>
  <script src="<?php echo e(asset('js/init.js')); ?>"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  
  <link href="<?php echo e(asset('css/materialize.css')); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo e(asset('css/style.css"')); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo e(asset('css/addons.css')); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php echo $__env->yieldContent('css'); ?>
  </script>
</head>
<body class="welcome">
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\indo-cemara\resources\views/user/layouts/app.blade.php ENDPATH**/ ?>