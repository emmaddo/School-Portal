<?php
session_start();
require('include/dbconfig.php');
require_once 'include/class.admin.php';
require_once 'include/session.php';

$reg_user = new USER();

if (!isset($_SESSION['email'])) {

    header("location: login.php");

    exit();
}

include("reg_process.php");
	

?>
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Register Student</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div class="main-wrapper">

<!-- header comes here -->
<?php include("include/header.php"); ?>


<!-- sidebar comes here -->
<?php include("include/sidebar.php"); ?>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">Add Student &nbsp;&nbsp;&nbsp; <?php if(isset($msg)) echo $msg;  ?></h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="index.html"><I class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="index.html">Student</a></li>
<li class="breadcrumb-item"><span> Add Student</span></li>
</ul>
</div>
</div>
</div>
<div class="page-content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<form class="custom-mt-form"  method="POST">
<div class="form-group">
<label>Firstname</label>
<input name="fname" type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Lastname</label>
<input name="lname"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Email</label>
<input name="email"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input name="pass"  type="password" class="form-control" required>
</div>

<div class="form-group">
<label>Gender</label>
<select name="gender"  class="form-control select" required>
<option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
<div class="form-group">
<label>Birth Date</label>
<input name="dob"  class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker" required>
</div>
<div class="form-group">
<label>Class</label>
<select name="class"  type="text" class="form-control" required>
<option value="">Select Class</option>
<option value="Creche">Creche</option>
<option value="Play Group">Play Group</option>
<option value="Lower KG">Lower KG</option>
<option value="Upper KG">Upper KG</option>
<option value="Lower Nursery">Lower Nursery</option>
<option value="Upper Nursery">Upper Nursery</option>
<option value="Year One">Year One</option>
<option value="Year Two">Year Two</option>
<option value="Year Three">Year Three</option>
<option value="Year Four">Year Four</option>
<option value="Year Five">Year Five</option>
</select>
</div>
<div class="form-group">
<label>Religion</label>
<input name="religion"  type="text" class="form-control" required>
</div>

</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">

<div class="form-group">
<label>Middlename</label>
<input name="mname"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Joining Date</label>
<input name="joining_date"  class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker" required>
</div>

<div class="form-group">
<label>Mobile number</label>
<input name="phone"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Comfirm Password</label>
<input name="cpassword"  type="password" class="form-control" required>
</div>
<div class="form-group">
<label>Admission No</label>
<input name="admission_no"  type="text" class="form-control" required>
</div>

<div class="form-group">
<label>Section</label>
<input name="section"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Admission Year</label>
<input name="admission_year"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Admission Term</label>
<input name="admission_term"  type="text" class="form-control" required>
</div>


</div>
<div class="mt-4">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-title ml-3">Parents information</div>
</div>
</div>
</div>
<div class="card-body w-100 p-3">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">

<div class="form-group">
<label>Father Name</label>
<input name="father_name"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Father Occupation</label>
<input name="father_occupation"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Father Mobile Number</label>
<input name="father_phone"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Father Address</label>
<textarea name="father_address"  class="form-control" rows="4" required></textarea>
</div>

</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">

<div class="form-group">
<label>Mother Name</label>
<input name="mother_name"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Mother Occupation</label>
<input name="mother_occupation"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Mother Mobile Number</label>
<input name="mother_phone"  type="text" class="form-control" required>
</div>
<div class="form-group">
<label>Mother Address</label>
<textarea name="mother_address"  class="form-control" rows="4" required></textarea>
</div>

</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group">
<label>Student Image</label>
<input name="student_image"  type="file" name="pic" accept="image/*" class="form-control">
</div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group">
<label>Parent Image</label>
<input name="parent_image"  type="file" name="pic" accept="image/*" class="form-control">
</div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group text-center custom-mt-form-group">
<button class="btn btn-primary mr-2" name="s_register" type="submit">Submit</button>
<button class="btn btn-secondary" type="reset">Cancel</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="notification-box">
<div class="msg-sidebar notifications msg-noti">
<div class="topnav-dropdown-header">
<span>Messages</span>
</div>
<div class="drop-scroll msg-list-scroll">
<ul class="list-box">
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author">Richard Miles </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item new-message">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">Ruth C. Gault</span>
<span class="message-time">1 Aug</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author"> Tarah Shropshire </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Mike Litorus</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
 <div class="list-left">
<span class="avatar">C</span>
</div>
<div class="list-body">
<span class="message-author"> Catherine Manseau </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">D</span>
</div>
<div class="list-body">
<span class="message-author"> Domenic Houston </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">B</span>
</div>
<div class="list-body">
<span class="message-author"> Buster Wigton </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author"> Rolland Webber </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">C</span>
</div>
<div class="list-body">
<span class="message-author"> Claire Mapes </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Melita Faucher</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">Jeffery Lalor</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">L</span>
</div>
<div class="list-body">
<span class="message-author">Loren Gatlin</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author">Tarah Shropshire</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
 </div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="chat.html">See all messages</a>
</div>
</div>
</div>
</div>

</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/select2.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="assets/js/app.js"></script>
</body>

</html>