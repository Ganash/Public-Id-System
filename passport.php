
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
echo "<h2 align='center'>ALL PASSPORT DETAILS</h2>";
$sql = "SELECT * FROM passport";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='width:100%' border='1' class='table table-striped' id='userTbl'><tr><th> Passport Unique Id </th><th> First Name  </th><th> Last Name </th><th> Voter Id </th><th> Phone Number </th><th> Father Name </th> <th> Mother Name </th> <th> Address </th> </tr>";
    while($row = $result->fetch_assoc()) {
    echo "<tr>";
    
    echo "<td align='center'>"; echo $row["passportid"]; echo "</td>";

    echo "<td align='center'>"; echo $row["firstname"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["lastname"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["voterid"]; echo "</td>";
	
    echo "<td align='center'>"; echo $row["phonenum"]; echo "</td>";

    echo "<td align='center'>"; echo $row["fathername"]; echo "</td>";

    echo "<td align='center'>"; echo $row["mothername"]; echo "</td>";

    echo "<td align='center'>"; echo $row["address"]; echo "</td>";
	
    
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>