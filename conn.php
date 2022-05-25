<?php   
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"error");
if(!$conn){
    die('Could not Connect My Sql:');
}
?>