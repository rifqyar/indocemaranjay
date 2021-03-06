{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Verify Your Account</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  {{-- <script src="{{ asset('js/materialize.js') }}"></script> --}}
  <script src="{{ asset('js/init.js') }}"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/> --}}
  <link href="{{ asset('css/style.css"') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/addons.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

</body>
</html>
 <script type="text/javascript">
  
 
const title = document.querySelector('.error_title')


//////// Light //////////
document.onmousemove = function(e) {
  let x = e.pageX - window.innerWidth/2;
  let y = e.pageY - window.innerHeight/2;
  
  title.style.setProperty('--x', x + 'px')
  title.style.setProperty('--y', y + 'px')
}

////////////// Shadow ///////////////////
title.onmousemove = function(e) {
  let x = e.pageX - window.innerWidth/2;
  let y = e.pageY - window.innerHeight/2;

  let rad = Math.atan2(y, x).toFixed(2); 
  let length = Math.round(Math.sqrt((Math.pow(x,2))+(Math.pow(y,2)))/10); 

  let x_shadow = Math.round(length * Math.cos(rad));
  let y_shadow = Math.round(length * Math.sin(rad));

  title.style.setProperty('--x-shadow', - x_shadow + 'px')
  title.style.setProperty('--y-shadow', - y_shadow + 'px')

}
 </script>
  <!-- Main content -->
  <div class="row mt-5 pt-5">
    <div class="col-3"></div>
    <div class="col-6">
      <section class="container">
        <div class="container-fluid">
           <section class="error_section bg-light">
          <h1 class="error_title h4">
            <!-- <p>404</p> -->
            Hi, Welcome!!
          </h1>
          <div class="card-header">{{ __('Verify Your Email Address') }}</div>

          <div class="card-body">
              @if (session('resent'))
                  <div class="alert alert-success" role="alert">
                      {{ __('A fresh verification link has been sent to your email address.') }}
                  </div>
              @endif

              {{ __('Before proceeding, please check your email for a verification link.') }}{{-- 
              {{ __('If you did not receive the email') }},
              <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                  @csrf
                  <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
              </form> --}}
          </div>
        </section>
        </div><!-- /.container-fluid -->
      </section>
    </div>
    <div class="col-3"></div>
  </div>
</div>
{{-- @endsection --}}
