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

  
  <script type="text/javascript">
    $(function(){
      $('.dropdown-trigger').dropdown({
          inDuration: 400,
          outDuration: 225,
          closeOnClick: true,
          coverTrigger: false,
          constrain_width: true, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
      );
      $('.sidenav').sidenav({
        draggable: true,
        edge: 'left',
      });
      $('.collapsible').collapsible();
      $('.parallax').parallax({
        responsiveThreshold : 100,
      });
      $('.modal').modal({
        opacity: 0.78
      });

      var clicked = 0;

      $(".toggle-password").click(function (e) {
         e.preventDefault();

        $(this).toggleClass("toggle-password");
          if (clicked == 0) {
            $(this).html('<span class="material-icons">visibility_off</span >');
             clicked = 1;
          } else {
             $(this).html('<span class="material-icons">visibility</span >');
              clicked = 0;
           }

        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
           input.attr("type", "text");
        } else {
           input.attr("type", "password");
        }
      });
    });
  </script>
</head>
<body>
  <nav class="navbar-fixed transparent z-depth-0" role="navigation" style="height: 80px; padding-top: 10px;">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo"><span class="red-text text-darken-5">INDO</span>Cemara</a>
      <a href="#" data-target="sidebar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#!">Home</a></li>
        <li><a href="#read-more">Service</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="caraKerja">Cara Kerja<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="#!">Harga?</a></li>
        <li><a class="waves-effect waves-light btn-small red lighten-1 modal-trigger" href="#daftar" style="border-radius: 50px;">Daftar</a></li>
        <?php if(auth()->guard()->guest()): ?>
          <li><a class="waves-effect waves-light btn-small deep-orange modal-trigger" href="#login" style="border-radius: 50px;">Login</a></li>
        <?php else: ?>
          <li>
            <a class="waves-effect waves-light btn-small deep-orange modal-trigger"  href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" style="border-radius: 50px">
                <?php echo e(__('Logout')); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
          </li>
        <?php endif; ?>
      </ul>
    </div>
    <hr class="container">
  </nav>
  
  <ul class="sidenav" id="sidebar">
    <li><a href="#!">Home</a></li>
    <li><a href="#read-more">Service</a></li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Cara Kerja<i class="material-icons" style="margin-right: -5px;margin-left: 8px">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#!">Bagaimana Cara Kerjanya</a></li>
              <li><a href="#!">Ilmuwan Kita</a></li>
              <li><a href="#!">Proteksi Data</a></li>
              <li><a href="#!">Partisipasi Penelitian</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li><a href="#!">Harga?</a></li>
    <li><a class="waves-effect waves-light btn-small red lighten-1 modal-trigger" href="#daftar" style="border-radius: 50px;">Daftar</a></li>
    <?php if(auth()->guard(Auth::check())->guest()): ?>
      <li><a class="waves-effect waves-light btn-small deep-orange modal-trigger" href="#login" style="border-radius: 50px;">Login</a></li>
    <?php else: ?>
      <li>
        <a class="waves-effect waves-light btn-small deep-orange modal-trigger"  href="<?php echo e(route('logout')); ?>"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" style="border-radius: 50px">
            <?php echo e(__('Logout')); ?>

        </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
      </li>
    <?php endif; ?>
  </ul>
  <!-- Dropdown Structure -->
  <ul id="caraKerja" class="dropdown-content">
    <li><a href="#!">Bagaimana Cara Kerjanya</a></li>
    <li><a href="#!">Ilmuwan Kita</a></li>
    <li><a href="#!">Proteksi Data</a></li>
    <li><a href="#!">Partisipasi Penelitian</a></li>
  </ul>

  <?php echo $__env->yieldContent('content'); ?>

  
  
  <div id="login" class="modal ">
    <h5 class="modal-close">&#10005;</h5>
    <div class="modal-content center">
      <h4>Login Form</h4>
      <br>

      <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" id="email" name="email" class="validate <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
          <label for="email">Email</label>
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="helper-text" data-error="<?php echo e($message); ?>"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <br>

        <div class="input-field">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate" name="password <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
          <label for="password">Password</label>
          <span toggle="#password" class="field-icon toggle-password"><span class="material-icons">visibility</span></span>
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="helper-text" data-error="<?php echo e($message); ?>"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <br>

        <div class="left" style="margin-left:20px;">
          <input type="checkbox" id="check">
          <label for="check">Remember Me</label>
        </div>
        <br>
        
        <input type="submit" value="Login" class="btn btn-large" style="width: 100%">
        <p><a href="#!">Lupa Pasword</a></p>
        <p>Belum punya akun? Silahkan <a href="#daftar" class="daftar-close modal-trigger">Daftar Sekarang</a></p>
      </form>
    </div>
  </div>

  
  
  <div id="daftar" class="modal ">
    <h5 class="modal-close">&#10005;</h5>
    <div class="modal-content center">
      <h4>Daftar Akun Baru</h4>
      <br>

      <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <div class="input-field">
          <input type="text" name="id_user" class="validate <?php $__errorArgs = ['no_telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($newIdUser ?? ''); ?>" hidden>
          <i class="material-icons prefix">local_phone</i>
          <input id="no_telp" type="number" class="validate" name="no_telp">
          <label for="no_telp" class="active">No. telepon</label>
          <?php $__errorArgs = ['no_telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="helper-text" data-error="<?php echo e($message); ?>"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="input-field">
          <i class="material-icons prefix">email</i>
          <input id="email2" type="email" class="validate <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email">
          <label for="email2" class="active">Email</label>
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="helper-text" data-error="<?php echo e($message); ?>"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="input-field">
          <i class="material-icons prefix">lock</i>
          <input id="password2" type="password" class="validate <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password">
          <label for="password2">Password</label>
          <span toggle="#password2" class="field-icon toggle-password"><span class="material-icons">visibility</span></span>
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="helper-text" data-error="<?php echo e($message); ?>"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="input-field">
          <i class="material-icons prefix">lock</i>
          <input id="password-confirm" type="password" class="validate <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password_confirmation">
          <label for="password-confirm">Confirm Password</label>
          <span toggle="#password-confirm" class="field-icon toggle-password"><span class="material-icons">visibility</span></span>
          <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="helper-text" data-error="<?php echo e($message); ?>"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <br>
        
        <input type="submit" value="Daftar" class="btn btn-large" style="width: 100%">
        <p>Sudah punya akun? Silahkan <a href="#login" class="login-close modal-trigger">Login Sekarang</a></p>
      </form>
    </div>

    
    
  </div>

  
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Indo Cemara</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="https://www.instagram.com/kangsomay_prapatan/">Rifqy Aditya yang baik dan tidak sombong</a>
      </div>
    </div>
  </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\indo-cemara\resources\views/layouts/app.blade.php ENDPATH**/ ?>