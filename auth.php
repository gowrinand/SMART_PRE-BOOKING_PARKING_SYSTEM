<?php

$host = "localhost";
$user = "id20562363_spdb";
$pass = "-TcToX?W*@p6X4U(";
$db = "id20562363_smartparking";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL database";
}

if (!empty($_POST['rfid'])) {
    $val = $_POST['rfid'];

    $query = "SELECT rfid FROM parkingstatus WHERE spot=1";
    $data = mysqli_fetch_array(mysqli_query($conn, $query), MYSQLI_ASSOC);
    $rfid = $data['rfid'];

    if ($val == $rfid) {
        echo "BOLLARD OPEN!!!";
    } else {
        echo "Invalid Spot";
    }
}

echo "WTF it didn't work?";
