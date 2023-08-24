<?php
if ($_POST) {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "smartparking";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect($host, $user, $pass, $db);
    $query = "SELECT * FROM user_auth WHERE username='$username' AND passw='$password'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['auth'] = 'true';
        header('location:index.php');
    } else {
        echo 'WRONG USERNAME or PASSWORD';
    }
}
