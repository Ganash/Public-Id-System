<!doctype html>

<html>
	
	<head>
		
	<title> Votercard Page </title>
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


			<div class="jumbotron">
			
			<h3 align="center"> VOTERCARD </h3>
			<div id="formDiv">
				
				<form method="POST" action="voteraction1.php" enctype="multipart/form-data">
			  
				<div class="per"> <h3 style="align:center; margin-bottom: 10px " > ----  Personal Details  ----  </h1>
			
        <label> Voter ID</label><br/>
        <input type="text" name="voterid" class="inputFields" required/><br/><br/>
				
				<label> Name:</label><br/>
				<input type="text" name="name"  class="inputFields" required/><br/><br/>

				<label>Phone Number </label><br/>
				<input type="text" name="phnnum" class="inputFields"  required/><br/><br/>

        <label> Age </label><br/>
        <input type="text" name="age" class="inputFields"  required/><br/><br/>


        <!-- radio -->

                      <div class="form-group">
                    <label> Gender </label>
                    <select  name="gender" class="form-control select2" style="width: 100%;">
                      <option selected="selected"> Male </option>
                      <option> Female </option>
                    </select>
                  </div><!-- /.form-group -->                      

				</div>
				
				<label>Address:</label><br/>
				<textarea rows="5" cols="40" wrap="hard" name="addres">
					
				</textarea>

        <div class="per" > <h3 style="align:center; margin-bottom: 10px" > ----  Image Details  ---- </h1>



			
			<a href="" class="hvr-float-shadow"><button type="submit" class="btn btn-primary"  style="width:200px" style="font-weight:bold" name="upload" > Upload </button> </a>
  

			
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