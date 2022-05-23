<?php
session_start();
require('include/dbconfig.php');
require_once 'include/class.admin.php';

if (isset($_POST['email']) and isset($_POST['upass'])){

$email = $_POST['email'];
$upass = $_POST['upass'];
$upass = md5($upass);

$query = "SELECT * FROM admin WHERE email='$email' and upass='$upass'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count > 0){
$_SESSION['email']=$email;
}else{

$msg = "<div class='alert alert-danger'>
						<button class='close' data-dismiss='alert'>&times;</button>
						  Invalid Email or Password!
                   
			  </div>";
}
}

if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
header('Location: admindashboard.php');
 
}else{}
?>

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="main-wrapper">
<div class="account-page">
<div class="container">
<h3 class="account-title text-white">Login</h3>
<?php if(isset($msg)) echo $msg;  ?>
<div class="account-box">
<div class="account-wrapper">
<div class="account-logo">
<a href="index.html"><img src="assets/img/logo.png" alt="SchoolAdmin"></a>
</div>
<form autocomplete="off" method="POST">
<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control" placeholder="Enter Email" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="upass" placeholder="Enter Password" class="form-control">
</div>
<div class="form-group text-center custom-mt-form-group">
<button class="btn btn-primary btn-block account-btn" name="login" type="submit">Login</button>
</div>
<div class="text-center">
<a href="#">Forgot your password?</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/app.js"></script>
</body>


</html>
