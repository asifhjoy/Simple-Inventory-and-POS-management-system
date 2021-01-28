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

$tinv = $_POST['inv'];
$tphone = $_POST['phone'];
$tcase = $_POST['casing'];
$tpro = $_POST['processor'];
$tmobo = $_POST['mobo'];
$tvga = $_POST['vga'];
$tram = $_POST['ram'];
$tdd = $_POST['dd'];
$tpsu = $_POST['psu'];
$tmonitor = $_POST['mon'];
$tkbm = $_POST['kbm'];
$tsound = $_POST['sound'];
$tacs = $_POST['acs'];
$tlaptop = $_POST['laptop'];


$sql = "UPDATE invoice SET phone='$tphone', casing='$tcase', pro='$tpro', mobo='$tmobo', vga='$tvga', ram='$tram', dd='$tdd', psu='$tpsu', monitor='$tmonitor', kbm='$tkbm', sound='$tsound', acs='$tacs', laptop='$tlaptop' WHERE inv=$tinv ";


if ($conn->query($sql) == TRUE) {

      
    header('Location: customersearch.php'); 

    
}
else {
         echo "<center><h2><br><br><br><br>Problem To Checkout</h2></center>";
}



?>