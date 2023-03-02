<?php
if(!isset($_SESSION)) { session_start(); }
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT  &  ~E_WARNING);
$dt = date("Y-m-d");

include("databaseconnection.php");
if(isset($_POST['btndonorregister']))
{
	$sql ="INSERT INTO donor(name,email_id,password,contact_no,status) VALUES ('$_POST[name]','$_POST[donoremailid]','$_POST[donornpassword]','$_POST[contactno]','Active')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('You have succesfully registered.');</script>";
		echo "<script>window.location='index.php';</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
if(isset($_POST['btndonorlogin']))
{
	$sql  ="SELECT * FROM donor WHERE email_id='$_POST[donoremail_id]' AND password='$_POST[donorpassword]' AND status='Active'";
	$qsql =mysqli_query($con,$sql);
	if(mysqli_num_rows($qsql)  == 1)
	{
		$rs = mysqli_fetch_array($qsql);
		$_SESSION['donor_id'] = $rs['donor_id'];
		echo "<script>window.location='donoraccount.php';</script>";
	}
	else
	{
		echo "<script>alert('You have entered invalid login credentials.');</script>";
	}
}
if(isset($_POST['btnstafflogin']))
{
	$sql  ="SELECT * FROM staff WHERE login_id='$_POST[staffloginid]' AND password='$_POST[staffpassword]' AND status='Active'";
	$qsql =mysqli_query($con,$sql);
	if(mysqli_num_rows($qsql)  == 1)
	{
		$rs = mysqli_fetch_array($qsql);
		$_SESSION['staff_id'] = $rs['staff_id'];
		echo "<script>window.location='dashboard.php';</script>";
	}
	else
	{
		echo "<script>alert('You have entered invalid login credentials.');</script>";
	}
}
if(isset($_SESSION['donor_id']))
{
	$sqldonor  ="SELECT * FROM donor WHERE donor_id='$_SESSION[donor_id]'";
	$qsqldonor =mysqli_query($con,$sqldonor);
	echo mysqli_error($con);
	$rsdonor = mysqli_fetch_array($qsqldonor);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>MyVolunteer</title>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
<link rel="stylesheet" href="css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/jquery.dataTables.min.css" />
<style>
@import "compass/css3";

/*Be sure to look into browser prefixes for keyframes and annimations*/
.errorclass {
   animation-name: flash;
    animation-duration: 0.2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}

@keyframes flash {
    from {color: red;}
    to {color: black;}
}
</style>
</head>
<body>
<?php
if(basename($_SERVER['PHP_SELF']) == "index.php")
{
?>
<header id="home">
<?php
}
else
{
?>
	<header >
<?php
}
?>
<nav id="main-navbar">
<div class="container">
<div class="navbar-header">

<div class="navbar-brand">
<a class="logo" href="index.php"><img src="img/logo2.png" alt="logo"></a>
</div>


<button class="navbar-toggle-btn">
<i class="fa fa-bars"></i>
</button>


<button class="search-toggle-btn">
<i class="fa fa-search"></i>
</button>

</div>

<?php
/*
<div class="navbar-search">
<button class="search-btn"><i class="fa fa-search"></i></button>
<div class="search-form">
<form>
<input class="input" type="text" name="search" placeholder="Search">
</form>
</div>
</div>
*/
?>

<ul class="navbar-menu nav navbar-nav navbar-right">

<?php
if(isset($_SESSION['donor_id']))
{
?>
<li><a href="donoraccount.php">Home</a></li>

<li><a href="fundraiser.php">Events</a></li>

<li><a href="displaymembers.php">NGO</a></li>

<li class="has-dropdown"><a href="#">Gallery</a>
	<ul class="dropdown">
		<li><a href="gallery.php" >Photos  </a></li>
		<li><a href="photo.php" >Upload Photo  </a></li>
	</ul>
</li>


<li class="has-dropdown"><a href="#">Account</a>
	<ul class="dropdown">
		<li><a href="donorprofile.php">Donor Profile</a></li>
		<li><a href="donorchangepassword.php" >Change password</a></li>
		<li><a href="logout.php" >Logout</a></li>
	</ul>
</li>
<?php
}
else if(isset($_SESSION['staff_id']))
{
?>
<li><a href="dashboard.php">Dashboard</a></li>

<li class="has-dropdown"><a href="#">Events</a>
	<ul class="dropdown">
		<li><a href="fund.php" >Add Events</a></li>

		<li><a href="viewfund.php" >View Events</a></li>

		<li><a href="viewform.php" >View Volunteer Form</a></li>
	</ul>
</li>

<li class="has-dropdown"><a href="#">Gallery</a>
	<ul class="dropdown">
		<li><a href="photo.php" >Upload Photo  </a></li>
		<li><a href="viewphoto.php" >View Photo </a></li>
		<li><a href="album.php" >Create Album</a></li>
		<li><a href="viewalbum.php" >View Album</a></li>
	</ul>
</li>

<li class="has-dropdown"><a href="#">Staff Account</a>
	<ul class="dropdown">
		<li><a href="staffprofile.php">Staff Profile</a></li>
		<li><a href="staffchangepassword.php" >Change Password</a></li>
		<li><a href="staff.php" >Add Staff  </a></li>
		<li><a href="viewstaff.php" >View Staff </a></li>
		<li><a href="logout.php" >Logout</a></li>
	</ul>
</li>
<?php
}
else
{
?>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<!-- <li><a href="fundraiser.php">Events</a></li> -->
<li><a href="displaymembers.php">NGO</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="contact.php">Contact</a></li>
<li class="has-dropdown"><a href="#">Donor</a>
	<ul class="dropdown">
		<li><a href="" onclick="return false;"  data-toggle="modal" data-target="#DonorLoginModal" >Login</a></li>
		<li><a href="" onclick="return false;" data-toggle="modal" data-target="#DonorRegisterModal">Register</a></li>
	</ul>
</li>
<?php
}
?>
</ul>

</div>
</nav>