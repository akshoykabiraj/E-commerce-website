<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "default";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn) {

    echo " Joining successful ";
}else{
    echo "Joining unsuccessful ";
}

$email=$_POST["EMAIL"];

$checke="SELECT * FROM subscriber WHERE email = '$email'";
$rse = mysqli_query($conn,$checke);
$datae = mysqli_num_rows($rse);

if($datae >= 1) {
    echo "Email Already in Exists<br/>";
} 
else {
    $query="INSERT INTO subscriber (email) VALUES ('$email')";
    $run=mysqli_query($conn,$query);
}


if($run){
    echo "registration  Successful";
}
else{
    echo "registration unsuccessful";
}

?>