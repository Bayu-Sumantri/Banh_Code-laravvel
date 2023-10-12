{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Banh_Code | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("/Admin/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset("/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("/Admin/dist/css/adminlte.min.css") }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ url("../../index2.html") }}" class="h1"><b>Banh_Code</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name"  :value="old('name')" required autofocus autocomplete="name">
          <input-label for="name" :value="__('Name')" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" :value="old('email')" required autocomplete="username">
          <input-label for="email" :value="__('Email')" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required
          autocomplete="new-password" >
          <input-label for="password" :value="__('Password')" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required autocomplete="new-password">
          <input-label for="password_confirmation" :value="__('Confirm Password')" />
          <input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            {{-- <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="{{ url("#") }}">terms</a>
              </label>
            </div> --}}
            {{-- <div class="container">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
          </div>
          <!-- /.col -->
      </form>

  
      <a href="{{ url("login.html") }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

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
    <link rel="stylesheet" href="{{ asset("/banhcode/css/login.css") }}">
    <title>Register</title>
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


<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div>Banh<span>Code;/;</span></div>
    </div>
    <br>
    <div class="login">
        <!-- username -->
        <input-label for="name" :value="__('Name')" />
        <input type="text" placeholder="Full name" name="name" :value="old('name')" autofocus autocomplete="name" required><br><br>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <!-- username_end -->

        <!-- Email -->
        <input-label for="email" :value="__('Email')" />
        <input type="email" placeholder="Email" name="email" :value="old('email')" required autocomplete="username" required><br>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <!-- Email_end -->
        
        <!-- Password -->
        <input-label for="password" :value="__('Password')" />
        <input type="password" placeholder="Password" name="password" required autocomplete="new-password" ><br>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <!-- Password_end -->
        
        <!-- Password_Comfirm -->
        <input-label for="password_confirmation" :value="__('Confirm Password')" />
        <input type="password" placeholder="Retype password" name="password_confirmation" required autocomplete="new-password" required><br>
        <input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        <!-- Password_Comfirm_end -->



        <input type="submit" name="submit" value="Submit" class="button"><br>
        <div class="register" style="margin-right: 100px;">
            <div class="whitetext" style="text-align: center;"><p>Already have an account?</p></div>
          <div style="text-align: center;"><a class="hoverlink" href="{{ route("login") }}" style="text-align: center;">Login Here</a></div>
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
