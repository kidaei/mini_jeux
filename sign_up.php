<?php



if(isset($_POST['submit'])){
    $name=htmlspecialchars(strtolower(trim($_POST['name'])));
    $email=htmlspecialchars(strtolower(trim($_POST['email'])));
    $password=htmlspecialchars(strtolower(trim($_POST['password'])));
    
    // writing data into the login.csv file
    $fp = fopen('login.csv', 'r');
    $ft = fopen('temp.csv', 'w');

    if ($fp) {
        while ($data = fgetcsv($fp, 1000, ',')) {
            fputcsv($ft, $data, ',');
        }
    }

    fputcsv($ft, [$email, $password], ',');

    fclose($fp);
    fclose($ft);

    // destroy the original and rename the temp to original
    unlink('login.csv');
    rename('temp.csv', 'login.csv');
    
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
    <body>
        <div>
        <center>
        <form action="" method="POST">
            <h1>Mario game</h1>
            <h2> SignUp </h2>
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
        
        <p>welcome this is the page to login:"."<a href='login.php'>click</a>";</p>

        </center>
        </div>
              
           
    </body>
</html>