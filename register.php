<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "default";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);




$yn=$_POST["yname"];
$un=$_POST["uname"];
$email=$_POST["email"];
$fpass=$_POST["fpass"];
$cpass=$_POST["cpass"];


//$query="INSERT INTO register (yname, uname, email, password, cpassword) VALUES ('$yn','$un','$email','$fpass','$cpass')";


// username checking if already exists
$checku="SELECT * from register  WHERE uname = '$un'";
$rs = mysqli_query($conn,$checku);
$data = mysqli_num_rows($rs);
                if($data >= 1) {
                    echo "username Already in Exists<br/>";
                
                }else{

                    $checke="SELECT email from register WHERE email = '$email'";
                    $rse = mysqli_query($conn,$checke);
                    $datae= mysqli_num_rows($rse);
                
                            if($datae >= 1) {
                                echo "Email Already in Exists<br/>";
                          
                                 }else{
                             $query="INSERT INTO register (yname, uname, email, password) VALUES ('$yn','$un','$email','$fpass')";
                             $run=mysqli_query($conn,$query);
                                    if($run == true){
                                          echo "registration  Successful";
                                          header("location:login.php");
                                        
                                          }else{
                                              echo "registration unsuccessful";
                                  }
                     
                        }
                        
    }

?>
