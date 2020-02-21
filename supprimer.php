<h1>Supprimer</h1>

<?php
    $servername = "localhost";
    $dbname = "cours_php";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

                $sql = "DELETE FROM utilisateurs WHERE id='14'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>

