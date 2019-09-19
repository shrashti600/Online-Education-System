<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
 
    <title>Courses  </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
	<style type ="text/css">
	body {
	margin-top: 100px;
	
	background-image: url(image/r6.jpg);
background-repeat:no-repeat;
background-size:cover;
	
forms{padding-top: 400px;
	text-align: center;
font-size: 30px;}
input{width: 250px;
	height: 40px;
	fornt-size: 30px;}
}
</style>
 </head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
										<div class ="container">
										 <ul class="nav navbar-nav navbar-right">
                                                <li><a href="index.php">Logout</a></li></ul>
</div>
</div> 
<div class ="container">
<div class ="row">
<h1> Our Couses </h1>
<?php

if(isset($_REQUEST['date'])){

	$con=mysqli_connect("localhost","root","","rms");
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$date = mysqli_real_escape_string($con, $_REQUEST['date']);
$subject = mysqli_real_escape_string($con, $_REQUEST['subject']);
$description = mysqli_real_escape_string($con, $_REQUEST['desc']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$contact = mysqli_real_escape_string($con, $_REQUEST['contact']);
$sms = mysqli_real_escape_string($con, $_REQUEST['sms']);
$recur = mysqli_real_escape_string($con, $_REQUEST['recur']);
 
// Attempt insert query execution
$sql = "INSERT INTO reminders (dates, subject, description, email, contact, sms, recur) VALUES ('$date', '$subject', '$description','$email','$contact','$sms','$recur')";
if(mysqli_query($con, $sql)){
       echo	"Thank You, Your Transaction is confirmed" ; 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);

}
?>


<form action="#" method="post" align="center">
	
	Subject <select ="subject">
	<option value="meeting">-select-</option>
    	<option value="meeting" >java script </option>
		<option value="shopping">Php</option>
    	<option value="rent">Html</option>
    	<option value="dinner">Css</option>
		<option value="meeting">node js</option>
  </select> <br><br>
  
		
	
    	
 Course Title<input type="text" name="desc"><br> <br>
  
  <input type="submit" value="Add">
  
  
   <div class="btn-group">
  <a href="main.php" class="btn btn-primary">Back</a>
  
  </div>
</form>

</body>
</html>



</div>
</div>

 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
  </body>
  <?php
 
  ?>
</html>
