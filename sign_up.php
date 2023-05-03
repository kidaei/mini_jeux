<?php
include("connect.php");
if(isset($_POST['submit'])){
    $name=htmlspecialchars(strtolower(trim($_POST['name'])));
    $email=htmlspecialchars(strtolower(trim($_POST['email'])));
    $password=htmlspecialchars(strtolower(trim($_POST['password'])));
    $query = "INSERT INTO signup(name,email,password )VALUE('$name','$email','$password')";
    if(mysqli_query($con,$query)){
        echo"welcome this is the page to login:"."<a href='login.php'>click</a>";
    }
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
    <body>
        <div>
        <center>
        <form action="" method="POST">
            <h1> SignUp </h1>
                <table>
                    <tr>
                        <td>
                            <label>name:</label><br>
                                <input type="text"name="name" placeholder="enter your name" required><br><br> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>email:</label><br>
                                <input type="email"name="email" placeholder="enter your name" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>password:</label><br>
                                <input type="password"name="password" placeholder="enter your name" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name ="submit">SingUp</button>
                        </td>
                    </tr>
                </table>
        </form>
        </center>
        </div>
              
           
    </body>
</html>