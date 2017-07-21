
<!doctype html>

<html>
	
	<head>
		
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	


	 <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontssss/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/skins/_all-skins.min.css">

     

	<!-- HOVER MASTER -->
	<link href="css/hover.css" rel="stylesheet">
      
    <link href="css/hover-min.css" rel="stylesheet">
      
    <link href="css/demo-page.css" rel="stylesheet">


      <style type="text/css">

 
.bodybackgroundleft{

background: url(images/passport.jpg) no-repeat center left fixed; 

}



    
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
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about"> </a> </li>
          <li> <a class="page-scroll" href="#portfolio">Logout</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>


			<div class="bodybackgroundleft">
			
			<h3 align="center"> PASSPORT DETAILS </h3>
			<div id="formDiv">
				
				<form method="POST" action="passportaction1.php" enctype="multipart/form-data">
			
				
        <label>Passport Unique Id</label><br/>
        <input type="text" name="passid"  class="inputFields" required/><br/><br/>
				
        <label>First Name:</label><br/>
				<input type="text" name="fname" class="inputFields" required/><br/><br/>
				
				<label>Last Name:</label><br/>
				<input type="text" name="lname"  class="inputFields" required/><br/><br/>
				
				<label> Voter ID</label><br/>
				<input type="text" name="voterid"  class="inputFields" required/><br/><br/>
				
				<label> Phone Number </label><br/>
				<input type="text" name="phnnum" class="inputFields"  required/><br/><br/>
				
        <div class="per" > <h3 style="align:center; margin-bottom: 10px" > ----  Family Details  ---- </h1>

        <label>Father Name:</label><br/>
        <input type="text" name="fathrnam"  class="inputFields"  required/><br/><br/>
       

        <label>Mother Name:</label><br/>
        <input type="text" name="mothrnam"  class="inputFields"  required/><br/><br/>
       
          <label>Address:</label><br/>
        <textarea rows="5" cols="40" wrap="hard" name="addres">
          
        </textarea>

        <br><br>

				<input type="checkbox" name="conditions" />
				<label>I am agree with terms and conditions</label><br/><br/>
				<a href="" class="hvr-float-shadow"><button type="submit" class="btn btn-primary"  style="width:200px" style="font-weight:bold" name="upload" > UPLOAD </button> </a>
  

			
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
