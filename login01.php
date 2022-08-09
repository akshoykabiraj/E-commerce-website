<?php
  

$sname= "localhost";

$unmae= "root";

$password = "";


$db_name = "default";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
// Starting session
    
     
      

    if(!$conn == true){
        echo "connection successful";
    }

    $email=$_POST["email"];
    $pass=$_POST["fpass"];
  

    $verifye="SELECT * FROM register WHERE email = '$email' AND  password = '$pass' ";
    $rsp = mysqli_query($conn,$verifye);
    $data=mysqli_fetch_assoc($rsp);
  //  $datap = mysqli_num_rows($rsp);


  if(isset($data)){
        echo "___________successfully loged in !__________________";
        echo ' Hi,' . $_SESSION["email"] ;
       header("location:index-3.html");

  }else{
        echo "failed to login";
        header("location:login.php");
  }


//     if($datap >= 1) {

//         if($pass==$data["fpass"]){

//              echo "Thanks for visiting us";
//             // header("location:index-3.html");
        
//          } elseif($pass != $data["fpass"]){
//              echo("user does't exists, register first");
//           // header('url=register.html');
//     }
// }else{
//     echo "no log found";
// }


?>
    