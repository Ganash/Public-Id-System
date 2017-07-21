<html>
<body>
<?php
$s="localhost";
$u="root";
$p="";
$dbname="mini_project";
$conn = mysqli_connect($s,$u,$p,$dbname);
if($conn)
{
	echo "connectd successfully";
}
else
{
	echo "not connected";
}
echo "<br>";



if(isset($_POST['upload']))
{

$a=$_POST['id'];
$b=$_POST['liscnum'];
$c=$_POST['name'];
$d=$_POST['email'];
$e=$_POST['phnnum'];
$f=$_POST['gender'];
$g=$_POST['bldgrp'];

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;
echo "<br>";
echo $e;
echo "<br>";
echo $f;
echo "<br>";
echo $g;
echo "<br>";
$sql="insert into driving values('$a','$b','$c','$d','$e','$f','$g')";
if(mysqli_query($conn,$sql))
{
echo "data inserted";

    unset($id);
    unset($liscnum);
    unset($name);
    unset($email);
    unset($phnnum);
    unset($gender);
    unset($bldgrp);

}
else
{
	echo "theres some error";
}

}

mysqli_close($conn);
?>
<br>
Go Back To Login Page<td align="right"><td><a href="login.php">Login</a></td>
</body>
</html>
