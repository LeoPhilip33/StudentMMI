<h1>Modif</h1>

<?php
    $servername = "localhost";
    $dbname = "cours_php";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE utilisateurs SET nom='Doe' WHERE id='15'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>