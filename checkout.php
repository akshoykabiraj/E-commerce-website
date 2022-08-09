<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "default";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if($conn){
$nm=$_POST["cname"];
$email=$_POST["cemail"];
$ph=$_POST["cph"];
$str=$_POST["cst"];
$tow=$_POST["town"];
$sta=$_POST["state"];
$con=$_POST["country"];
$note=$_POST["your-notes"];

$query ="INSERT INTO checkout (name, email, phonenumber, street, town, state, country, notes) VALUES ('$nm', '$email', '$ph', '$str', '$tow', '$sta', '$con', '$note')";
$result=mysqli_query($conn,$query);
if($result ){
    echo "Order placed";
   // header("refresh:3 url: index-3.html");
}else{
    echo "Something goes wrong";
}
}

?>
