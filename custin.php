<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";
$p_id="";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['addr'];

// echo $name; echo "<br>";
// echo $phone; echo "<br>";
// echo $address; echo "<br>";


$sql="INSERT INTO customer (phone,name,addr) VALUES ('$phone','$name','$address') ";


if ($conn->query($sql) == TRUE) {

    
    header('Location: customersearch.php');
} else {
         echo "<center><h2><br><br><br><br>Problem To INSERT Data</h2></center>";
}


?>