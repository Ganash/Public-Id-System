/*if (empty($fname)) {
   $error = true;
   $fnameError = "* Please enter your full name. *";
} else if (strlen($fname) < 3) {
   $error = true;
   $fnameError = "* Name must have atleat 3 characters.*";
} else if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
   $error = true;
   $fnameError = "* Name must contain alphabets and space. *";
}


if (empty($lname)) {
   $error = true;
   $lnameError = "* Please enter your full name. *";
} else if (strlen($lname) < 3) {
   $error = true;
   $lnameError = "* Name must have atleat 3 characters.*";
} else if (!preg_match("/^[a-zA-Z ]+$/",$lname)) {
   $error = true;
   $lnameError = "* Name must contain alphabets and space. *";
}



if (empty($fathrnam)) {
   $error = true;
   $fanameError = "* Please enter your full name. *";
} else if (strlen($fathrnam) < 3) {
   $error = true;
   $fanameError = "* Name must have atleat 3 characters.*";
} else if (!preg_match("/^[a-zA-Z ]+$/",$fathrnam)) {
   $error = true;
   $fanameError = "* Name must contain alphabets and space. *";
}


if (empty($mothrnam)) {
   $error = true;
   $monameError = "* Please enter your full name. *";
} else if (strlen($mothrnam) < 3) {
   $error = true;
   $monameError = "* Name must have atleat 3 characters.*";
} else if (!preg_match("/^[a-zA-Z ]+$/",$mothrnam)) {
   $error = true;
   $monameError = "* Name must contain alphabets and space. *";
}


if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "* Please enter valid email address. *";
}



if (empty($phnnum)) {
   $error = true;
   $phnError = "* Please enter your mobile number. *";
} else if (strlen($phnnum) < 10) {
   $error = true;
   $phnError = "* Mobile Number must have atleat 10 digits. *";
} else if (!preg_match("/^[0-9]+$/",$phnnum)) {
   $error = true;
   $phnError = "* Mobile Number must contain only digits. *";
}


if (empty($cntry)) {
   $error = true;
   $cntryError = "* Please enter your Country *";

} 

if (empty($age)) {
   $error = true;
   $ageError = "* Please enter your age *";

} else if (strlen($age) > 100) {
   $error = true;
   $ageError = "* Age must have less than 100 *";}

   else if (!preg_match("/^[0-9]{2,3}+$/",$age)) {
   $error = true;
   $ageError = "* Age must contain only digits. *";
}


if (empty($gender)) {
   $error = true;
   $genderError = "* Please enter your gender *";
} 
else if(($gender)!="male"|| ($gender)!="female")
  {
    $error=true;
    $genderError="* Please Enter Correct Gender *";
  }


if (empty($pncod)) {
   $error = true;
   $pncodError = "* Please enter your Pincode *";

} 
   else if (!preg_match("/^[0-9]{6}+$/",$age)) {
   $error = true;
   $pncodError = "* Pincode must contain 6 digits *";
}



if (empty($bldgrp)) {
   $error = true;
   $bldgrpError = "* Please enter your bloodgroup *";

} 

else if($bldgrp!="A"|| $bldgrp!="B" || $bldgrp!="AB" || $bldgrp!="O")
  {
    $error=true;
    $bldgrpError="* Please Enter Correct Blood Group *";
  }


if (empty($stat)) {
   $error = true;
   $statError = "* Please enter your State *";
} 


if (empty($citi)) {
   $error = true;
   $citiError = "* Please enter your City *";
} 



if (empty($addres)) {
   $error = true;
   $addresError = "* Please enter your address *";
} 

if(empty($education))
{
  $error=true;
  $educationError = "* Please Enter the Education Link *";
}