<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP & CSV</title>
</head>
<body>
    <h1>Mario game</h1>
    <center><h2>login</h2>
    <form method="POST">
        <center>
        <label for="email">
            E-mail:</br>
            <input type="email" name="email" id="email" autocomplete="email">
        </label>
        </br>
        <label for="password">
            Password</br>
            <input type="password" name="password" id="password" autocomplete="password">
        </label>
        </br>
        <button id = "login_button"type="submit">Login</button>
    </form>
</body>
</html>

<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $loginFile = file('login.csv');
    foreach ($loginFile as $row) {
        $data = str_getcsv($row);
        if ($data[0] === $email && $data[1] === $password) {
            header('Location: login_success.php');
            exit();
        }
    }
    header('Location: login_failure.php');
    exit();
}