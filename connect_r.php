<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "default";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo " Joining unsuccessful ";
}
if ($conn) {

    echo " Welcome ";
}


$yn=$_POST["yname"];
$un=$_POST["uname"];
$email=$_POST["email"];
$fpass=$_POST["fpass"];
$cpass=$_POST["cpass"];

$check="SELECT * from register WHERE uname = '$un'";
$rs = mysqli_query($conn,$check);
$data = mysqli_num_rows($rs);
if($data>= 1) {
    echo "username Already in Exists<br/>";
}
else{
$checke="SELECT * from register WHERE email = '$email'";
$rse = mysqli_query($conn,$checke);
$datae = mysqli_num_rows($rse);
}
if($datae >= 1) {
    echo "Email Already in Exists<br/>";
} 
else {
    $query="INSERT INTO register (yname, uname, email, password, cpassword) VALUES ('$yn','$un','$email','$fpass','$cpass')";
}

$run=mysqli_query($conn,$query);
if($run){
    echo "registration  Successful";
}
else{
    echo "registration unsuccessful";
}

?>