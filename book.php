<?php
if ($_POST) {
    $host = "localhost";
    $user = "id20562363_spdb";
    $pass = "-TcToX?W*@p6X4U(";
    $db = "id20562363_smartparking";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $query = "SELECT rfid FROM auth_user WHERE name='$name'";
    $data = mysqli_fetch_array(mysqli_query($conn, $query), MYSQLI_ASSOC);
    $rfid = $data['rfid'];

    $spot = $_POST['spot'];
    $query = "UPDATE parkingstatus SET rfid='$rfid', WHERE spot='$spot'";
    $result = mysqli_query($conn, $query);

    if ($conn->query($result) === TRUE) {
        echo "BOOKING SUCCESSFUL.";
    } else {
        echo "Error: " . $result . "<br>" . $conn->error;
    }
}
