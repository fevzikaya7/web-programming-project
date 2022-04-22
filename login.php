<?php 
    include 'connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $verified = mysqli_query($c , "SELECT * FROM Users WHERE uname='$username' AND psswrd='$password';");
    $user = mysqli_fetch_row($verified);

    if ($user[0]) {
        setcookie("username", $user[1]);
        header('Location: main.php');
        exit();
    }
    else {
        header('Location: loginpage.php');
    };
    print_r($user);

?>