
<?php 
session_start();
$con = mysqli_connect('localhost','root','','error') or die ('unable to connect');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
        .field{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>welcome  to our page </h1>
    
    <div class="text-center"><a href="logout.php">deconneter</a></div>



</body>
</html>