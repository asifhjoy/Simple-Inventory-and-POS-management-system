<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";
$lastinv = "";
$case = "";
$pro = "";
$mobo = "";
$vga = "";
$ram = "";
$dd = "";
$psu = "";
$monitor = "";
$kbm = "";
$sound = "";
$acs = "";
$laptop = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sqlinv = "SELECT * from invoice";
$resultinv = $conn->query($sqlinv);
if ($resultinv->num_rows > 0) 
{
  
  while($row = $resultinv->fetch_assoc())
  {
    $lastinv=$row['inv'];
  }      
    
}

$sqlinvupdate = "SELECT * FROM invoice WHERE inv=$lastinv";

$resultinvupdate = $conn->query($sqlinvupdate);

if ($resultinvupdate->num_rows > 0) 
{
  
  while($row = $resultinvupdate->fetch_assoc())
  {

    $case = $row['casing'];
    $pro = $row['pro'];
    $mobo = $row['mobo'];
    $vga = $row['vga'];
    $ram = $row['ram'];
    $dd = $row['dd'];
    $psu = $row['psu'];
    $monitor = $row['monitor'];
    $kbm = $row['kbm'];
    $sound = $row['sound'];
    $acs = $row['acs'];
    $laptop = $row['laptop'];
 
  }

}

$sqlcase = "UPDATE casing SET quantity=quantity-1 WHERE sn=$case";
$conn->query($sqlcase);
$sqlpro = "UPDATE processor SET quantity=quantity-1 WHERE sn=$pro";
$conn->query($sqlpro);
$sqlmobo = "UPDATE motherboard SET quantity=quantity-1 WHERE sn=$mobo";
$conn->query($sqlmobo);
$sqlvga = "UPDATE vga SET quantity=quantity-1 WHERE sn=$vga";
$conn->query($sqlvga);
$sqlram = "UPDATE ram SET quantity=quantity-1 WHERE sn=$ram";
$conn->query($sqlram);
$sqldd = "UPDATE dd SET quantity=quantity-1 WHERE sn=$dd";
$conn->query($sqldd);
$sqlpsu = "UPDATE psu SET quantity=quantity-1 WHERE sn=$psu";
$conn->query($sqlpsu);
$sqlmonitor = "UPDATE monitor SET quantity=quantity-1 WHERE sn=$monitor";
$conn->query($sqlmonitor);
$sqlkbm = "UPDATE kbm SET quantity=quantity-1 WHERE sn=$kbm";
$conn->query($sqlkbm);
$sqlsound = "UPDATE sound SET quantity=quantity-1 WHERE sn=$sound";
$conn->query($sqlsound);
$sqlacs = "UPDATE accessories SET quantity=quantity-1 WHERE sn=$acs";
$conn->query($sqlacs);
$sqllaptop = "UPDATE laptop SET quantity=quantity-1 WHERE sn=$laptop";
$conn->query($sqllaptop);


$sql = "INSERT INTO invoice (phone,casing,pro,mobo,vga,ram,dd,psu,monitor,kbm,sound,acs,laptop) VALUES (0,0,0,0,0,0,0,0,0,0,0,0,0) ";

if ($conn->query($sql) == TRUE) {

      
    header('Location: employeelandingpage.php'); 

    
}
else {
         echo "<center><h2><br><br><br><br>Problem To Checkout</h2></center>";
}


















?>