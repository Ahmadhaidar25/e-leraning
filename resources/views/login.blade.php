<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
  src="https://kit.fontawesome.com/64d58efce2.js"
  crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="{{asset('login2/login.css')}}">
  <title>Login</title>




</head>
<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="{{url('login-post')}}" method="post" class="sign-in-form">
          <img src="{{asset('login2/STMIIK.png')}}" class="image" alt="" style="width:30%;"/>
          <h2 class="title">Selamat Datang</h2>
          @csrf
          <div class="input-field">
            <i class="fas fa-user"></i>
          <input type="text" name="username" placeholder="Username" required  autofocus />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-password" placeholder="Password" required />
           
          </div>
           <input type="checkbox" class="form-checkbox" style="margin-left: -300px;">
           <p style="margin-left: -120px; margin-top: -20px;">Show password</p>

          <input type="submit" value="Login" class="btn solid lg-10" />


        </form>
        <form action="#" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <img src="{{asset('login2/STMIIK.png')}}" class="image" alt="" />

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3></h3>
            <p>
            
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Tentang
            </button>
          </div>
          <img src="{{asset('login2/el.png')}}" class="image" alt="" />

        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>E-Learning STMIK Horizon Karawang</h3>
            <p>

            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="{{asset('login2/al.png')}}" class="image" alt="" />
        </div>
      </div>
    </div>


    

    <script src="{{asset('login2/app.js')}}"></script>

    <script>
      $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('.form-password').attr('type','text');
      }else{
        $('.form-password').attr('type','password');
      }
    });
  });
    </script>

     <script src="{{asset('layout2/dasboard/js/vendor/jquery-2.2.4.min.js')}}"></script>

  </body>
  @include('sweetalert::alert')
  </html>
