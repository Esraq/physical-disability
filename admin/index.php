<?php

session_start();


?>





<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="index.php" method="post">
    <input type="text" name="user" placeholder="email">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
  <a href="http://localhost/physical_disability/m.html">back</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>

<?php
    mysql_connect("localhost","root","");
	mysql_select_db("eisty");
    if(isset($_POST['login'])){
		
		$email=$_POST['user'];
		$password=$_POST['pass'];
		
		$check_user="select * from admin where email='$email' AND password='$password'";
		
		$run =mysql_query($check_user);
        if(mysql_num_rows($run)>0){
			
			$_SESSION['email']=$email;
			header("location:home.php");
			
		}		
		else
		{
			echo "<script>alert('Email or password is not match')</script>";
			
		}
		
		
	}
?>	  