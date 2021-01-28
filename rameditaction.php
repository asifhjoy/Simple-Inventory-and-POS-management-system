<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn)
	{
		die("Connection failed: ");
	}
	

$sql="UPDATE ram SET name='$_POST[name]', quantity='$_POST[quantity]', ppu='$_POST[ppu]' WHERE sn = '$_POST[Iod]'";


if ($conn->query($sql) == TRUE) {
    header('Location: ram.php');
} else {
         echo "<center><h2>Problem To UPDATE</h2></center>";
}
	

	
mysqli_close($conn);


?>