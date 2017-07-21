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

$a=$_POST['passid'];
$b=$_POST['fname'];
$c=$_POST['lname'];
$d=$_POST['voterid'];
$e=$_POST['phnnum'];
$f=$_POST['fathrnam'];
$g=$_POST['mothrnam'];
$h=$_POST['addres'];

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
echo $h;
echo "<br>";

$sql="insert into passport values('$a','$b','$c','$d','$e','$f','$g','$h')";
if(mysqli_query($conn,$sql))
{
echo "data inserted";

    unset($passid);
    unset($fname);
    unset($lname);
    unset($voterid);
    unset($phnnum);
    unset($fathrnam);
    unset($mothrnam);
    unset($addres);

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
