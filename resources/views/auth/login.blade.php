{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Banh_Code | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("/Admin/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset("/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("/Admin/dist/css/adminlte.min.css") }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ url("../../index2.html") }}" class="h1"><b>Banh_Code</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" required autofocus autocomplete="username" :value="old('email')">
            <input-label for="email" :value="__('Email')" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password"  required autocomplete="current-password">
            <input-label for="password" :value="__('Password')" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />   
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ route("register") }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset("/Admin/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset("/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/Admin/dist/js/adminlte.min.js") }}"></script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("/banhcode/assets/img/Banh Code.ico") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("/banhcode/css/login.css") }}">
    <title>Login</title>
</head>

 <style>
    /* Center the loader */

    #loader {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 1;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }
    }

    @keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }

    #myDiv {
        display: none;
    }
    </style>


<form action="{{ route('login') }}" method="post">
  @csrf
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div>Banh<span>Code;/;</span></div>
    </div>
    <br>
    <div class="login">
      <input-label for="email" :value="__('Email')" />
      <input type="email" placeholder="Email" name="email" requiredautofocus autocomplete="username" :value="old('email')"><br>
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <input-label for="password" :value="__('Password')" />
        <input type="password" placeholder="password" name="password" id="inputPassword" required><br>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />   


        <input type="checkbox" onclick="myFunction()">Tampilkan Password

    <script>
        function myFunction() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>


        <input type="submit" name="submit" value="Submit" class="button"><br>
        <div class="register" style="margin-right: 100px;">
            <div class="whitetext" style="text-align: center;"><p>Don't have an account?</p></div>
          <div style="text-align: center;"><a class="hoverlink" href="{{ route("register") }}" style="text-align: center;">Register Here</a></div>
        </div>
        
        
    </form>
</div>

    <body onload="myFunction()" style="margin:0;">
        <div id="loader"></div>
        <div style="display:none;" id="myDiv" class="animate-bottom">
            <script>
            // Loading Page
            var myVar;

            function myFunction() {

                myVar = setTimeout(showPage, 500);

            }

            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("myDiv").style.display = "block";
            }
            </script>

    
</body>

</html>
