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

$a=$_POST['voterid'];
$b=$_POST['name'];
$c=$_POST['phnnum'];
$d=$_POST['age'];
$e=$_POST['gender'];
$f=$_POST['addres'];

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
$sql="insert into votercard values('$a','$b','$c','$d','$e','$f')";
if(mysqli_query($conn,$sql))
{
echo "data inserted";

    unset($voterid);
    unset($name);
    unset($phonenumber);
    unset($age);
    unset($gender);
    unset($address);

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
