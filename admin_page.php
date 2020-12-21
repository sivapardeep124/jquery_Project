<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave2.png">
	<div class="container">
		<div class="img">
			<img src="img/bg2.svg">
		</div>
		<div class="login-content">
			<form >
				<img src="img/avatar2.svg">
				<h2 class="title">A d m i n</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" id="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" id="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<button type="button" class="btn" value="Login"  onclick="valid()">Login </button>

            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

    <script type="text/javascript">
      function valid(){
        var user = document.getElementById('username').value;
        var pass = document.getElementById('password').value;

        if (user == "alagappa777" && pass == "skill777") {
          alert("Success");
          window.location = "main_page.php";
        }
        else{
          alert("Username Or Password is Wrong");
        }
      }  
    </script>
</body>
</html>
