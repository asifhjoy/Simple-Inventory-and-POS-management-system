<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO processor (name, quantity, ppu)
VALUES ('$_POST[name]',$_POST[quantity],$_POST[ppu])";

if ($conn->query($sql) == TRUE) {
    header('Location: processor.php');
} else {
         echo "<center><h2><br><br><br><br>Problem To INSERT Data</h2></center>";
}

$conn->close();
?>