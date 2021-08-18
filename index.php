<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  background-image : url("bg.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<div class = "bg"></div>
</head>
<body>
<div class = "centered">
 <h1> WELCOME TO MINIPRO</h1>
 <h2 style="text-align:center"> Place to watch everything you need</h2>
 <p style="text-align:center">Already have an account? <a href="login.php">Login here</a>.</p>
 <p style="text-align:center">Don't have an account? <a href="register.php">Sign up now</a>.</p><br/>
</div>
</body>
</html>
<?php
  require_once "config.php";
?>