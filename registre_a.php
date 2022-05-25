<?php 
include 'conn.php';


if( isset($_POST['save'])){
$username=htmlspecialchars( strtolower(trim($_POST['userName'])) ) ;
$email=htmlspecialchars( strtolower(trim($_POST['email'])) );
$password=  md5($_POST['pass']) ;

    $sql="INSERT into login(UserName,email,password) value ('$username','$email','$password')";
    $query=mysqli_query($conn,$sql);
    if($query){
        header('location:login.php');

    }else{
        echo'error';
    }

}



?>