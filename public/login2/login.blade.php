<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
	<link rel="stylesheet" href="{{asset('layout_login/css/login.css')}}">
	<title>Animated Login Form</title>




</head>
<body>
<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
		  <img src="{{asset('layout_login/img/STMIIK.png')}}" class="image" alt="" style="width:30%;"/>
            <h2 class="title">Selamat Datang</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            
            
          </form>
<form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
			<img src="{{asset('layout_login/img/STMIIK.png')}}" class="image" alt="" />
           
        </div>
      </div>

	  <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Tentang
            </button>
          </div>
          <img src="{{asset('layout_login/img/el.png')}}" class="image" alt="" />
       
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
          <img src="{{asset('layout_login/img/al.png')}}" class="image" alt="" />
        </div>
      </div>
    </div>

	
		

	<script src="{{asset('layout_login/js/app.js')}}"></script>
  
</body>
@include('sweetalert::alert')
</html>
