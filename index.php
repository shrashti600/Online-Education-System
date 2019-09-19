<?php
/*session_start();
$errors=0;
$con=mysqli_connect("localhost","root","","rms");
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $phone = mysqli_real_escape_string($con, $_POST['number']);
  $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
 
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration  WHERE number=$phone ";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['number'] === $phone) {
      $errors=$errors+1; 
      echo "mobile no already exists";
    }
  }
  // Finally, register user if there are no errors in the form
  if ($errors== 0) {
    $q="insert into registration(name,email,gender,number,pwd)values('$name','$email','$gender',$phone,'$pwd')";
		
  	mysqli_query($con, $q);
  	$_SESSION['number'] = $phone;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}
*/
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">

    <title>Online Restaurant Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
<title> reg. from </title>

<style type = "text/css">
body{
background-image: url(image/r6.jpg);
background-repeat:no-repeat;
background-size:cover;
}
table{
background: red:
padding:30px
width: 500px;
margin:auto;
font-size:20px;
color: white:
font-family:verdana;
}
.form-input{
	padding: 5;
	border:2px solid black;
	margin: 2%;
	border-radius: 8px;
	
}
</style>



<script type="text/javascript">
function check()
{
   var nametest=/[A-Za-z]$/;
  var name = document.getElementById("name").value;
  if(name=="" || nametest.test(name)==false)
  {
   document.getElementById("vname").innerHTML="Insert valid name";
   document.getElementById("vname").style.color="red";
   document.getElementById("name").focus();
  }
  elsef
  {
  documfent.getElementById("vname").innerHTML="";
  }
}
 function validate()
 {
  var nametest=/[A-Za-z]$/;
  var name = document.getElementById("name").value;
  if(name=="" || nametest.test(name)==false)
  {
   document.getElementById("vname").innerHTML="Insert valid name";
   document.getElementById("vname").style.color="red";
   return false;
  }
  var mailtest=/[A-Za-z0-9._-]+@[A-Za-z]+\.[a-z]{2,3}$/;
  var mail = document.getElementById("email").value;
  if(mail =="" || mailtest.test(mail)==false)
  {
   document.getElementById("vmail").innerHTML="Insert valid mail id";
   document.getElementById("vmail").style.color="red";
   return false;
  }
  var numbertest=/^[0-9]{10}$/;
  var number = document.getElementById("number").value;
  if(numbertest.test(number)==false)
  {
   document.getElementById("vmob").innerHTML="Insert valid number";
   document.getElementById("vmob").style.color="red";
   return false;
  }

 return true;
 }
</script>


</head>
<body>
<center>    
<h1><span class="glyphicon glyphicon-pencil"></span>&nbsp Fill Details </h1>
</center>
<form action="index.php" method="post" onSubmit= "return validate()">

<div class="container theme-showcase" role="main">



 <div class ="jumbotron">
 <div  clas ="row">
		<div   class =" col-lg-12" " col-lg-6" " col-lg-4"> 
		
        <h2> WELCOME </h2>
		<div  class ="row">
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		
		
		
</div>
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		<table>
<tr><td>
 Name :
</td>
<td>
<input type="text" placeholder="Enter your name"  name="name" id="name" onBlur="check()"></td><td><i id="vname"></b></td>
</td>
</tr>
<tr>
<td>
 Email :
</td>
<td>

<input type="text" placeholder="Enter your email" name="email" id="email"></td><td><i id="vmail"></i></td>
</tr>
<tr>
<td>
 Gender :
</td>
<td>
<select name="gender">
<option value="male">male</option>
<option value="Female">Female</option>
<option value="other">other</option>
</select>
</option>
</td>
</tr>
<tr>
<td>
Phone no.
</td>
<td> 

<input type="text" placeholder="9675****"  name ="number" id="number"></td><td><i id="vmob"></i><td>
</tr>

<tr>
<td>

 Password :
</td>
<td>
<input type="password"placeholder="*****"   name ="pwd" id="pwd"></td><td><i id="vpass"></i></td>
</tr>

<br><br><br>
<tr>
<td>
<a href="reg2.php" class="btn btn-default">RESET</a>
</td>
<td>
<input type = "submit" value ="SUBMIT" name= "btn">
</td>
</tr>
<tr>
<td>
<a href="login.php" class="btn btn-default">For Login Click Here</a>
</td>
</tr>
</table>
  
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
	</head>
	</html>
<?php

	if(isset($_POST['btn'])){
		$con=mysqli_connect("localhost","root","","rms");
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$number=$_POST['number'];
		$pwd=$_POST['pwd'];		
$q="insert into registration(name,email,gender,number,pwd)values('$name','$email','$gender','$number','$pwd')";
		$r=mysqli_query($con,$q);
		if($r){
			echo "you are successfully registered.......Now you may login....Thankyou";
		}
		else{
			echo mysqli_error($con);
		}
		
	}
?>