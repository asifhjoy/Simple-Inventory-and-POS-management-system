<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["sn"];
$sql = "DELETE FROM sound WHERE sound.sn = $id";
if ($conn->query($sql) == TRUE) {
    header('Location: sound.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>