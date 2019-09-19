<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
<title> login </title>

<script type="text/javascript">

</script>

<body>
<center>
<h1>WELCOME</h1>

</center>
<form method="post" action="login.php"><br><br><br><br>
<div class="container theme-showcase" role="main">

 
		<div   class =" col-lg-12" " col-lg-6" " col-lg-4"> 
        
		<div  class ="row">
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		
		
		
</div>
<center>
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		EMAIL ID:  
  <input type="text" name="email" required ><br><br>
  PASSWORD:
    <input type="password"  name="pwd" id="pwd" required> <br><br><br>
	</center>
	<center>
   <input type="submit" name="submit"> 
              <br><br>
			  <div class="btn-group">
	<a href="index.php" class="btn btn-primary">Register Here</a>
    
  
</div>

			  
			  
			
		
			</center>
</form>
 
		</div>
		</div>
      </div>
	</div>
	</div>
	</div>
	</div>

</form>

 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
</body>
</head>
</html>
<?php
if(isset($_POST['submit']))
{
	$con=mysqli_connect("localhost","root","","rms");
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
		$q="SELECT * FROM registration WHERE email='$email' AND pwd='$pwd'";
	$run=mysqli_query($con,$q);
	if(mysqli_affected_rows($con)==1){
		session_start();
		$r=mysqli_fetch_array($run);
		$_SESSION['email']=$email;
		$_SESSION['address']=$r['address'];
		$_SESSION['name']=$r['name'];
		header('location:main.php');
	}
	else
		echo "<h1>";
		echo "<b>";
		echo"Incorrect id or password....Please Login Again";
		echo "</b>";
		echo "</h1>";
}
?>





<?php/*
session_start();
$con=mysqli_connect("localhost","root","","rms");
if (isset($_POST['submit'])) {
  $mob = mysqli_real_escape_string($con, $_POST['number']);
  $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
  $query="select * from registration where mobile='$mob' AND pwd='$pwd'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['mobile'] = $mob;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  	}else {
  		echo "Wrong username/password combination";
  	
  }
}
*/
?>
