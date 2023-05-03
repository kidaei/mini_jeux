<?php
include('interdit.php');
echo"welcome".$_SESSION['name']" a notre jeux";
if (isset($_post['submit'])){
    unset($_SESSION['name']);
    header("Location:login.php"); 

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
        <form action="" method="POST">
            <button type="submit" name ="submit">Logout</button>
    </body>
</html>