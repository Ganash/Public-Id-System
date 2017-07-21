
<?php

$myConnection= mysqli_connect("mysql.hostinger.in","u717124741_mini","ganesh95") or die ("could not connect to mysql"); 

mysqli_select_db($myConnection, "u717124741_mini") or die ("no database");
if(isset($_POST['sendmypassword']))
{


  $email=$_POST['email'];

  $query="select *from loginform where useremail='$email'";

$result = mysqli_query($myConnection,$query);
if (!$result) {
    throw new Exception("Database Error [{$this->database->errno}] {$this->database->error}");
}

  if($row=$result->fetch_assoc())
  {
    $password=$row['userpassword'];

    if(mail($email,'Your Password!!',"Your Password is: $password",'From:ganaganesh2013@gmail.com')){

      header("Location:forgetpassword.php?success=".urlencode("Your Password has been sent to your email!!"));
      exit();
    }
    else{

     header("Location:forgetpassword.php?err=".urlencode(" Sorry we could not send this password at this time OR Sorry There is no user with provided EMail!!"));
      exit();

    }

  }
}

?>

<!doctype html>

<html>
	
	<head>
		
	<title> Forget Password Page </title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	

<link href="css/bootstrap.css" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
  <link href="css/components/datepicker.almost-flat" rel="stylesheet">

  <link href="css/components/datepicker" rel="stylesheet">

  <link href="css/components/datepicker.almost-flat.min" rel="stylesheet">

  <link href="css/components/datepicker.gradient" rel="stylesheet">

  <link href="css/components/datepicker.gradient.min" rel="stylesheet">

  <link href="css/components/datepicker.min" rel="stylesheet">

	<!-- HOVER MASTER -->
	<link href="css/hover.css" rel="stylesheet">
      
    <link href="css/hover-min.css" rel="stylesheet">
      
    <link href="css/demo-page.css" rel="stylesheet">


  <style type="text/css">


    
    .per
    {
      margin-top: 10px;

      

    }


    /* Navigation */
#nav {
  z-index: 9999;
}
#nav.affix {
  position: fixed;
  top: 0;
  width: 100%
}
.navbar-custom {
  margin-bottom: 0;
  background-color: #121d1f;
  border-radius: 0px;
  padding: 10px 0;
}
.navbar-custom .navbar-brand {
  font-weight: 600;
}
.navbar-custom .navbar-brand:focus {
  outline: 0;
}
.navbar-custom .navbar-brand .navbar-toggle {
  padding: 4px 6px;
  font-size: 16px;
  color: #fff;
}
.navbar-custom .navbar-brand .navbar-toggle:focus, .navbar-custom .navbar-brand .navbar-toggle:active {
  outline: 0;
}
.navbar-custom a {
  color: #f4f5f6;
}
.navbar-custom .nav li a {
  text-transform: uppercase;
  letter-spacing: 1px;
  -webkit-transition: background .3s ease-in-out;
  -moz-transition: background .3s ease-in-out;
  transition: background .3s ease-in-out;
}
.navbar-custom .nav li a:hover {
  outline: 0;
  color: #7bc3d1;
  background-color: transparent;
}
.navbar-custom .nav li a:focus, .navbar-custom .nav li a:active {
  outline: 0;
  background-color: transparent;
  color: #7bc3d1;
}
.navbar-custom .nav li.active {
  outline: 0;
}
.navbar-custom .nav li.active a {
  background-color: rgba(255,255,255,.3);
}
.navbar-custom .nav li.active a:hover {
  color: #fff;
}

.bodybackground{
  background-size:cover;
  background-image:url("images/startpagebackground.png");  
}

  </style>

	</head>
	
	
	<body>

<div id="nav">
  <nav class="navbar navbar-fixed-top navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" href="#page-top" >Public Id System</a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        
      </div>
    </div>
  </nav>
</div>


  <div class="container">

    

      <form method="post" name="frm" style="margin-top:40px" autocomplete="off">



			<div class="jumbotron" style="margin-top:50px">

          <h3> Forget Password </h3>

          <?php 

          if(isset($_GET['success'])) { ?>

          <div class="alert alert-success"> <?php echo $_GET['success']; ?> </div>

          <?php } ?>

          <?php 

          if(isset($_GET['err'])) { ?>

          <div class="alert alert-danger"> <?php echo $_GET['err']; ?> </div>

          <?php } ?>

          
          

          <hr>

          <div class="form-group" >


            <label for="exampleInputEmail1"></label>
            <div class="input-group">
              <span class="input-group-addon"><span class="fa fa-user"></span></span>
              <input type="email" name="email" class="form-control" placeholder="Email Address" maxlength="50" required="required"> 
            </div>

            <br> <br> 

            <button type="submit" class="btn btn-default" style="width:180px" style="font-weight:bold" name="sendmypassword" > Send My Password </button> <br><br>
            <a href="index.php" class="btn btn-danger"> Cancel</a>

            
          </div>  
              </div>

              </form>
              
              </div>  
		


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
		
	</body>

</html>

<!--<form method="POST" action="index.php" enctype="multipart/form-data">The enctype is needed to upload files or images-->
<!--<label>First Name:</label>  Label tag is new in html5-->