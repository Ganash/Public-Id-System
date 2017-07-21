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




$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['phnnum'];
$e=$_POST['age'];
$f=$_POST['gender'];
$g=$_POST['bldgrp'];
$h=$_POST['cntry'];
$i=$_POST['stat'];
$j=$_POST['citi'];
$k=$_POST['pncod'];
$l=$_POST['fathrnam'];
$m=$_POST['mothrnam'];
$n=$_POST['addres'];
$o=$_POST['education'];
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
echo $i;
echo "<br>";
echo $j;
echo "<br>";
echo $k;
echo "<br>";
echo $l;
echo "<br>";
echo $m;
echo "<br>";
echo $n;
echo "<br>";
echo $o;
echo "<br>";


$sql="insert into personalcard values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')";
if(mysqli_query($conn,$sql))
{
echo "data inserted";

    unset($fname);
    unset($lname);
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
	echo "theres some error";
}

}

mysqli_close($conn);
?>
<br>
Go Back To Login Page<td align="right"><td><a href="login.php">Login</a></td>
</body>
</html>
