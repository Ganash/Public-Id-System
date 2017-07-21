/*

$emailError=null;
$passError=null;



include("includes/db.php");
session_start();
if($_SERVER["REQUEST_METHOD"]== "POST")
{
	mysqli_real_escape_string($conn,$_POST['email']);

	$myusername=mysqli_real_escape_string($conn,$_POST['email']);
	$mypassword=mysqli_real_escape_string($conn,$_POST['password']);
	$mypassword=sha1($mypassword);

	$sql="SELECT `userid` FROM `loginform` WHERE `useremail`='$myusername'and `userpassword`='$mypassword' ";
	if($res = $conn->query($sql))
	{
		if($res-> num_rows>0)
		{
			header("Location: home.php");

		}
	}
	else
	{
		$errMSG="Your Login and password is wrong";
	}
}
*/












// include("includes/functionalities.php");

// if(logged_in())
// {
// 	header("location:home.php");
// 	exit();
// }

// $error = "";

// if(isset($_POST['login']))
// {
// 	echo $_POST['mobile'];
// 	echo  $_POST['password'];

// 	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
// 	$password = mysqli_real_escape_string($con, $_POST['password']);
// 	$checkBox = isset($_POST['remember_me']);


// 	if(mobile_exists($mobile,$con))
// 	{
// 		$result = mysqli_query($con, "SELECT password FROM logform WHERE mobile='$mobile'");
// 		$retrievepassword = mysqli_fetch_assoc($result);

// 		if(!password_verify($password, $retrievepassword['password']))
// 		{
// 			$error = "Password is incorrect";
// 		}
// 		else
// 		{
// 			$_SESSION['mobile'] = $mobile;

// 			if($checkBox == "on")
// 			{
// 				setcookie("mobile",$mobile, time()+3600);
// 			}

// 			header("location: home.php");
// 		}


// 	}
// 	else
// 	{
// 		$error = "Mobile Number Does not exists";
// 	}


// }












  $query="SELECT useremail, userpassword FROM loginform WHERE useremail='$email'";
  
   $res=@mysqli_query($conn,$query);

  $row=@mysqli_fetch_array($res);
   $count = @mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
   
   if($count==1 && $row['userpassword']==$password ) {
    $_SESSION['user'] = $row['userid'];
    header("Location: home.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
   






















    session_start();

$email=null;
$pass=null;
$emailError=null;
$passError=null;



 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
 }

 
include("includes/db.php");

$error = false;
 
 if( isset($_POST['login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  

   $sql="SELECT userid FROM loginform WHERE useremail = $email and userpassword = $pass ";
	if($res = $conn->query($sql))
	{
		if($res-> num_rows>0)
		{
			header("Location: home.php");

		}
	}
	else
	{
		$errMSG="Your Login and password is wrong";
	}

 
  }
  
 }
 




















 personalcard1.php

 <?php
session_start();

 $fname=null;
 $lname=null;
 $email=null;
 $phnnum=null;
 $age=null;
 $gender=null;
 $bldgrp=null;
  $cntry=null;
  $stat=null;
  $citi=null;
  $phnnum=null;
  $pncod=null;
  $fathrnam=null;
  $mothrnam=null;
$addres=null;
$education=null;

$fnameError=null;
$lnameError=null;
$fanameError=null;
$monameError=null;
$emailError=null;
$phnError=null;
$cntryError=null;
$ageError=null;
$pncodError=null;
$genderError=null;
$bldgrpError=null;
$statError=null;
$citiError=null;
$addres=null;
$education=null;

require_once('includes/db.php');
$error=false;


if ( isset($_POST['upload']) )
{


  $fname = trim($_POST['fname']);
  $fname = strip_tags($fname);
  $fname = htmlspecialchars($fname);

  $lname = trim($_POST['lname']);
  $lname = strip_tags($lname);
  $lname = htmlspecialchars($lname);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $phnnum = trim($_POST['phnnum']);
  $phnnum = strip_tags($phnnum);
  $phnnum = htmlspecialchars($phnnum);

  $age = trim($_POST['age']);
  $age = strip_tags($age);
  $age = htmlspecialchars($age);

  $gender = trim($_POST['gender']);
  $gender = strip_tags($gender);
  $gender = htmlspecialchars($gender);

  $bldgrp = trim($_POST['bldgrp']);
  $bldgrp = strip_tags($bldgrp);
  $bldgrp = htmlspecialchars($bldgrp);

  

  $cntry = trim($_POST['cntry']);
  $cntry = strip_tags($cntry);
  $cntry = htmlspecialchars($cntry);

  $stat = trim($_POST['stat']);
  $stat = strip_tags($stat);
  $stat = htmlspecialchars($stat);

  $citi = trim($_POST['citi']);
  $citi = strip_tags($citi);
  $citi = htmlspecialchars($citi);

  $phnnum = trim($_POST['phnnum']);
  $phnnum = strip_tags($phnnum);
  $phnnum = htmlspecialchars($phnnum);

  $pncod = trim($_POST['pncod']);
  $pncod = strip_tags($pncod);
  $pncod = htmlspecialchars($pncod);

  $fathrnam = trim($_POST['fathrnam']);
  $fathrnam = strip_tags($fathrnam);
  $fathrnam = htmlspecialchars($fathrnam);

  $mothrnam = trim($_POST['mothrnam']);
  $mothrnam = strip_tags($mothrnam);
  $mothrnam = htmlspecialchars($mothrnam);

  $addres = trim($_POST['addres']);
  $addres = strip_tags($addres);
  $addres = htmlspecialchars($addres);

  $education = trim($_POST['education']);
  $education = strip_tags($education);
  $education = htmlspecialchars($education);
}


  

//echo hello;
echo $fname;
echo $lname;
echo $phnnum;
echo $age;
echo $gender;
echo $bldgrp;
if( !$error ) 
{

   $query = "INSERT INTO personalcard VALUES ('$fname','$lname','$email','$phnnum','$age','$gender','$bldgrp','$cntry','$stat','$citi','$pncod','$fathrnam','$mothrnam', '$addres', '$education')";


 
   if (mysqli_query($conn,$query)) 
   {
    $errTyp = "success";
    $errMSG = "* Successfully registered, you may login now *";
    unset($fname);
    unset($lame);
    unset($email);
    unset($phnnum);
    unset($age);
    unset($gender);
    unset($bldgrp);
    unset($cntry);
    unset($stat);
    unset($citi);
    unset($pncod);
    unset($fathrnam);
    unset($mothrnam);
    unset($addres);
    unset($education);
   }
    else 
    {
    $errTyp = "danger";
    $errMSG = "* Something went wrong, try again later...*"; 
    } 

  }
?>





             <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">  
             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
    