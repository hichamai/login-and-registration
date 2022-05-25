
<?php 
session_start();
include 'conn.php';


if( isset($_POST['submit'])){
$email=htmlspecialchars( strtolower(trim($_POST['email'])) );
$password=  md5($_POST['pass']) ;

$sql2="SELECT * from login  where email='$email' &&  password='$password'";

    $query1=mysqli_query($conn,$sql2);
    if( mysqli_num_rows($query1) >0){
        $_SESSION['email']=$email;
        header('location:index.php');
    }else{
        echo'email ou password est faut';
    }

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to Finance Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body style="  margin:0;width:100%;height:70%;display:flex; justify-content:center; align-items:center; flex-direction:column">
<div class="signup-form" style="width:50%; display:flex; flex-direction:colum; margin-left:60px;">
    <form action="login.php" method="post" enctype="multipart/form-data">
		<h2>Login</h2>
		<p class="hint-text">Enter Login Details</p>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="text-center">Don't have an account? <a href="registre.php">Register Here</a></div>
    </form>
</div>
</body>
</html>