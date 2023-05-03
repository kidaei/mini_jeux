<?php
include("connect.php");
session_start();
if(isset($_POST['submit'])){
    $name=htmlspecialchars(strtolower(trim($_POST['name'])));
    $password=htmlspecialchars(strtolower(trim($_POST['password'])));
    $query = "SELECT * FROM signup WHERE name='$name'&& password=$password";
    if(mysqli_num_rows(mysqli_query($con,$query))>0){
        $_SESSION['name']=$name;
        header("location:jeux.php");
    }else{
        echo"wrong name or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
    <body>
        <div class="col-8 p-4 two">
        <form action="" method="POST">
        <label>name:</label><br><input type="text"name="name" placeholder="enter your name" required><br><br> 
        <label>name:</label><br><input type="password"name="password" placeholder="enter your name" required><br><br>  
        <button type="submit" name ="submit">LoginIn</button>
        </div>
    </body>
</html>