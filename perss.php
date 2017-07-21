
<html>
	
	<head>
		
	<title> PersonalCard Page </title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	 
	


	 <link href="css/bootstrap.css" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

     

	<!-- HOVER MASTER -->
	<link href="css/hover.css" rel="stylesheet">
      
    <link href="css/hover-min.css" rel="stylesheet">
      
    <link href="css/demo-page.css" rel="stylesheet">


    <script type="text/javascript" src="personalvalida.js"></script>


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
	
	
	<body class="">
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

			<div >
  	
			<h3 align="center"> PERSONALCARD </h3>
			<div id="formDiv">

				<form name="personals" method="POST" action= "personalaction1.php" onsubmit="return formvalidation1();" enctype="multipart/form-data">
			  
				<div class="per"> <h3 style="align:center; margin-bottom: 10px " > ----  Personal Details  ---- </h1>

				<label>First Name:</label><br/>
				<input type="text" name="fname" class="inputFields" required/><br/><br/>
        

				<br> <br>
				<label>Last Name:</label><br/>
				<input type="text" name="lname"  class="inputFields" required/><br/><br/>
        
        <br> <br>
				
				<label>Email:</label><br/>
				<input type="email" name="email"  class="inputFields"  required/><br/><br/>
        
        <br> <br>
				
				<label>Phone Number </label><br/>
				<input type="text" name="phnnum" class="inputFields" required/><br/><br/>
         
         <br> <br>

        <label> Age </label><br/>
        <input type="text" name="age" class="inputFields"  required/><br/><br/>
         
         <br> <br>

        <!-- radio -->
         <div class="form-group">
                    <label> Gender </label>
                    <select  name="gender" class="form-control select2" style="width: 100%;" required>
                    <option value="default1"> Select Gender</option>
                      <option > Male </option>
                      <option> Female </option>
                      
                    </select>
                  </div><!-- /.form-group -->

                 <br> <br>

        <div class="form-group">
                    <label> Blood Group </label>
                    <select  name="bldgrp" class="form-control select2" style="width: 100%;" required>
                      <option value="default2"> Select Blood Group</option>
                      <option > A </option>
                      <option> B </option>
                      <option> AB </option>
                      <option> O </option>
                    </select>
                  </div><!-- /.form-group -->





				</div>
				
				<div class="per"> <h3 style="align:center; margin-bottom: 10px" > ----  Country Details  ---- </h1>
				<!-- /.form-group -->

				 <div class="form-group">
                    <label> Country </label>
                    <select  name="cntry" class="form-control select2" style="width: 100%;" required>
                    <option value="default3"> Select Country</option>
                      <option > India </option>
                      
                    </select>
                  </div><!-- /.form-group -->


        
 <div class="form-group">
                    <label> State </label>
                    <select  name="stat" class="form-control select2" style="width: 100%;" required>
                    <option value="default4"> Select State </option>
                      <option> Andhrapradesh </option>
                      <option> Karnataka </option>
                      <option> Kerala </option>
                      <option> TamilNadu </option>
                    </select>
                  </div><!-- /.form-group -->


				 <div class="form-group">
                    <label> City </label>
                    <select  name="citi" class="form-control select2" style="width: 100%;" required>
                    <option value="default5"> Select City </option>
                      <option > Bangalore </option>
                      <option> Chennai </option>
                      <option> Hyderbad </option>
                      <option> Palakkad </option>
                    </select>
                  </div><!-- /.form-group -->




				<label> Pin Code </label><br/>
				<input type="text" name="pncod"  class="inputFields"  required/><br/><br/>
				</div>

				<div class="per" > <h3 style="align:center; margin-bottom: 10px" > ----  Family Details  ---- </h1>

				<label>Father Name:</label><br/>
				<input type="text" name="fathrnam"  class="inputFields"  required/><br/><br/>
       

				<label>Mother Name:</label><br/>
				<input type="text" name="mothrnam"  class="inputFields"  required/><br/><br/>
       

				<label>Residental Address:</label><br/>
				</div>
				<textarea rows="5" cols="40" wrap="hard" name="addres" required>
					
				</textarea>

        <div class="per" > <h3 style="align:center; margin-bottom: 10px" > ----  Education Details  ---- </h1>
          <label> Education Link</label><br/>
        <input type="text" name="education"  class="inputFields" required/><br/><br/>
        <p ><i> #This link can be LinkedIn, Internshala... </i></p>

			<a href="" class="hvr-float-shadow"><button type="submit" class="btn btn-primary"  style="width:200px" style="font-weight:bold" name="upload" > Upload </button> </a>
  

			
			</div>	
				
				</form>
			
			

			</div>
		
	</body>

</html>

<!--<form method="POST" action="index.php" enctype="multipart/form-data">The enctype is needed to upload files or images-->
<!--<label>First Name:</label>  Label tag is new in html5-->