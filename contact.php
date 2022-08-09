<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "default";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if($conn){
$nm=$_POST["name"];
$email=$_POST["email"];
$ph=$_POST["phone_number"];
$msub=$_POST["msg_subject"];
$sub=$_POST["message"];

$query ="INSERT INTO contact (name, email, phone, subject, message) VALUES ('$nm', '$email', '$ph', '$msub', '$sub')";
$result=mysqli_query($conn,$query);
if($result ){
    echo "feedback  Successful";
   // header("refresh:3 url: index-3.html");
}else{
    echo "feedback not send";
}
}

?>
