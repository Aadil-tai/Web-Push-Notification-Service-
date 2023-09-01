<?php
$conn = mysqli_connect("localhost","push","push","push");
 if(!$conn){
     echo "Database connection failed";
 }
 if(isset($_POST['token'])){
     $token = $_POST['token'];
     $domain = $_POST['domain'];
     $sql="INSERT into token values (NULL,'$token','$domain')";
     
     $result=mysqli_query($conn,$sql);
     if($result){
        echo "Successful";
     }else{
         echo "Unable to insert token";
     }
 }

?>