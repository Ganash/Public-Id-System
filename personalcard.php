







<!DOCTYPE html>
<html lang="en">  
<head>
<title> Personal Display</title>

<link href="css/1bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/1bootstrap.min.js" rel="stylesheet"> </script> 
<script type="text/javascript" src="js/1jquery.min.js" rel="stylesheet"></script>


<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#userTbl tbody tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>

<style type="text/css">
    

.form-control
{

    margin-top: 10px;
}


</style>


</head>
<body>
<div class="container">
    <div class="form-group pull-right">
        <input type="text" class="search form-control" placeholder="What you looking for?">
    </div>
    </div>
    </body>
</html>






<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<h2 align='center'>ALL PERSONAL DETAILS</h2>";

$sql = "SELECT * FROM personalcard";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='width:100%' border='1' class='table table-striped' id='userTbl'><tr><th> First Name</th><th> Last Name </th><th> Email </th><th> Phone Number</th><th> Age </th><th> Gender </th><th> Blood Group </th><th> Country </th><th> State </th><th> City </th><th> Pincode </th><th> Father Name </th><th>Mother Name</th><th> Address </th><th> Education </th></tr>";
    while($row = $result->fetch_assoc()) {


    echo "<tr>";
    
    echo "<td align='center'>"; echo $row["fname"]; echo "</td>";

    echo "<td align='center'>"; echo $row["lname"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["email"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["phnnum"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["age"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["gender"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["bldgrp"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["cntry"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["stat"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["citi"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["pncod"]; echo "</td>";

     echo "<td align='center'>"; echo $row["fathrnam"]; echo "</td>";

      echo "<td align='center'>"; echo $row["mothrnam"]; echo "</td>";

       echo "<td align='center'>"; echo $row["addres"]; echo "</td>";

        echo "<td align='center'>"; echo $row["education"]; echo "</td>";
    
    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>


