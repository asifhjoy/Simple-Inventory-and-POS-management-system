<title> UCL : Invoice </title>

<style>

table, th, td {
     border: 3px solid black;
     border-collapse:collapse;
     text-align: center;
     color: black;
     margin: auto;
     height: 30px;
     width: 900px;
}

.button {
  background-color:white; /* Green */
  border: 2px solid #008CBA;
  color: black;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 12px;
  
}

.button:hover {
  background-color: #008CBA;
  color: white;
  
}

</style>

<form action='updatedb.php'>
<button type='submit' class='button'><b>Home</b></button>
  </form>

<div id="printableArea">
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

$invoice = $_POST['invoice'];

$tphone = "";
$tcase = "";
$tpro = "";
$tmobo = "";
$tvga = "";
$tram = "";
$tdd = "";
$tpsu = "";
$tmonitor = "";
$tkbm = "";
$tsound = "";
$tacs = "";
$tlaptop = "";
$tcus = "";
$taddr = "";
$tphone = "";


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


$pcase = "";
$ppro = "";
$pmobo = "";
$pvga = "";
$pram = "";
$pdd = "";
$ppsu = "";
$pmonitor = "";
$pkbm = "";
$psound = "";
$pacs = "";
$plaptop = "";


$sqlinv = "SELECT * from invoice WHERE inv=$invoice";
$resultinv = $conn->query($sqlinv);

if ($resultinv->num_rows > 0) 
{
  
  while($row = $resultinv->fetch_assoc())
  {

    $tphone = $row['phone'];
    $tcase = $row['casing'];
    $tpro = $row['pro'];
    $tmobo = $row['mobo'];
    $tvga = $row['vga'];
    $tram = $row['ram'];
    $tdd = $row['dd'];
    $tpsu = $row['psu'];
    $tmonitor = $row['monitor'];
    $tkbm = $row['kbm'];
    $tsound = $row['sound'];
    $tacs = $row['acs'];
    $tlaptop = $row['laptop'];
 
  }      
    
}

$sqlcus = "SELECT * from customer WHERE phone=$tphone";
$resultcus = $conn->query($sqlcus);

if ($resultcus->num_rows > 0) 
{
  
  while($row = $resultcus->fetch_assoc())
  {
      $tcus=$row['name'];
      $taddr=$row['addr'];
  }
}

$sqlcase = "SELECT * from casing WHERE sn=$tcase";
$resultcase = $conn->query($sqlcase);

if ($resultcase->num_rows > 0) 
{
  
  while($row = $resultcase->fetch_assoc())
  {
      $case=$row['name'];
      $pcase=$row['ppu'];
  }
}
else
{
    $pcase=0;
}

$sqlpro = "SELECT * from processor WHERE sn=$tpro";
$resultpro = $conn->query($sqlpro);

if ($resultpro->num_rows > 0) 
{
  
  while($row = $resultpro->fetch_assoc())
  {
      $pro=$row['name'];
      $ppro=$row['ppu'];
  }
}
else
{
    $ppro=0;
}


$sqlmobo = "SELECT * from motherboard WHERE sn=$tmobo";
$resultmobo = $conn->query($sqlmobo);

if ($resultmobo->num_rows > 0) 
{
  
  while($row = $resultmobo->fetch_assoc())
  {
      $mobo=$row['name'];
      $pmobo=$row['ppu'];
  }
}
else
{
    $pmobo=0;
}


$sqlvga = "SELECT * from vga WHERE sn=$tvga";
$resultvga = $conn->query($sqlvga);

if ($resultvga->num_rows > 0) 
{
  
  while($row = $resultvga->fetch_assoc())
  {
      $vga=$row['name'];
      $pvga=$row['ppu'];
  }
}
else
{
    $pvga=0;
}


$sqlram = "SELECT * from ram WHERE sn=$tram";
$resultram = $conn->query($sqlram);

if ($resultram->num_rows > 0) 
{
  
  while($row = $resultram->fetch_assoc())
  {
      $ram=$row['name'];
      $pram=$row['ppu'];
  }
}
else
{
    $pram=0;
}


$sqldd = "SELECT * from dd WHERE sn=$tdd";
$resultdd = $conn->query($sqldd);

if ($resultdd->num_rows > 0) 
{
  
  while($row = $resultdd->fetch_assoc())
  {
      $dd=$row['name'];
      $pdd=$row['ppu'];
  }
}
else
{
    $pdd=0;
}

$sqlpsu = "SELECT * from psu WHERE sn=$tpsu";
$resultpsu = $conn->query($sqlpsu);

if ($resultpsu->num_rows > 0) 
{
  
  while($row = $resultpsu->fetch_assoc())
  {
      $psu=$row['name'];
      $ppsu=$row['ppu'];
  }
}
else
{
    $ppsu=0;
}

$sqlpsu = "SELECT * from psu WHERE sn=$tpsu";
$resultpsu = $conn->query($sqlpsu);

if ($resultpsu->num_rows > 0) 
{
  
  while($row = $resultpsu->fetch_assoc())
  {
      $psu=$row['name'];
      $ppsu=$row['ppu'];
  }
}

$sqlmonitor = "SELECT * from monitor WHERE sn=$tmonitor";
$resultmonitor = $conn->query($sqlmonitor);

if ($resultmonitor->num_rows > 0) 
{
  
  while($row = $resultmonitor->fetch_assoc())
  {
      $monitor=$row['name'];
      $pmonitor=$row['ppu'];
  }
}
else
{
    $pmonitor=0;
}

$sqlkbm = "SELECT * from kbm WHERE sn=$tkbm";
$resultkbm = $conn->query($sqlkbm);

if ($resultkbm->num_rows > 0) 
{
  
  while($row = $resultkbm->fetch_assoc())
  {
      $kbm=$row['name'];
      $pkbm=$row['ppu'];
  }
}
else
{
    $pkbm=0;
}

$sqlsound = "SELECT * from sound WHERE sn=$tsound";
$resultsound = $conn->query($sqlsound);

if ($resultsound->num_rows > 0) 
{
  
  while($row = $resultsound->fetch_assoc())
  {
      $sound=$row['name'];
      $psound=$row['ppu'];
  }
}
else
{
    $psound=0;
}

$sqlacs = "SELECT * from accessories WHERE sn=$tacs";
$resultacs = $conn->query($sqlacs);

if ($resultacs->num_rows > 0) 
{
  
  while($row = $resultacs->fetch_assoc())
  {
      $acs=$row['name'];
      $pacs=$row['ppu'];
  }
}
else
{
    $pacs=0;
}

$sqllaptop = "SELECT * from laptop WHERE sn=$tlaptop";
$resultlaptop = $conn->query($sqllaptop);

if ($resultlaptop->num_rows > 0) 
{
  
  while($row = $resultlaptop->fetch_assoc())
  {
      $laptop=$row['name'];
      $plaptop=$row['ppu'];
  }
}
else
{
    $plaptop=0;
}

$total = $pcase+$ppro+$pmobo+$pvga+$pram+$pdd+$ppsu+$pkbm+$psound+$pacs+$plaptop+$pmonitor;

// echo $tphone; echo "<br>";
// echo $tcase ; echo "<br>";
// echo $tpro  ; echo "<br>";
// echo $tmobo ; echo "<br>";
// echo $tvga  ; echo "<br>";
// echo $tram ; echo "<br>";
// echo $tdd ; echo "<br>";
// echo $tpsu ; echo "<br>";
// echo $tmonitor ; echo "<br>";
// echo $tkbm ; echo "<br>";
// echo $tsound ; echo "<br>";
// echo $tacs ; echo "<br>";
// echo $tlaptop ; echo "<br>";

echo "<br><br>";
echo "<center>";

echo "<h2>UCL Computers Ltd.</h2>";
echo "<h3>Invoice</h3>";

echo "</center>";
echo "<br><br>";
date_default_timezone_set("Asia/Dhaka");
echo "Date : ". date("d-m-Y"); echo "<br>";
echo "Time: ". date("h:i:sa");

echo "<br><br>";
echo "Invoice No. : ". $invoice;echo "<br>";
echo "Name : ". $tcus;echo "<br>";
echo "Phone : ". $tphone;echo "<br>";
echo "Address : ". $taddr;echo "<br><br>";

echo "<center>";
echo "<b><u>Product List</u></b>"; echo "<br><br>";
echo "<table border='1'><tr><th>Components</th><th>Model</th><th>Price</th></tr>";
echo "<tr><td>Casing</td><td>".$case."</td><td>".$pcase."</td></tr>";
echo "<tr><td>Processor</td><td>".$pro."</td><td>".$ppro."</td></tr>";
echo "<tr><td>Motherboard</td><td>".$mobo."</td><td>".$pmobo."</td></tr>";
echo "<tr><td>Graphics Card</td><td>".$vga."</td><td>".$pvga."</td></tr>";
echo "<tr><td>RAM</td><td>".$ram."</td><td>".$pram."</td></tr>";
echo "<tr><td>SSD / HDD</td><td>".$dd."</td><td>".$pdd."</td></tr>";
echo "<tr><td>Power Supply</td><td>".$psu."</td><td>".$ppsu."</td></tr>";
echo "<tr><td>Monitor</td><td>".$monitor."</td><td>".$pmonitor."</td></tr>";
echo "<tr><td>Keyboard / Mouse</td><td>".$kbm."</td><td>".$pkbm."</td></tr>";
echo "<tr><td>Headphone / Speaker</td><td>".$sound."</td><td>".$psound."</td></tr>";
echo "<tr><td>Other Accessories</td><td>".$acs."</td><td>".$pacs."</td></tr>";
echo "<tr><td>Laptop</td><td>".$laptop."</td><td>".$plaptop."</td></tr>";
echo "<tr><td colspan='2'>Total</td><td>".$total."</td></tr></table>";
echo "</div>"; echo "<br><br>"; echo "<br><br>";






?>
 <br> <br> <br> <br> <br> <br>
 <center><input type="button" class="button" onclick="printDiv('printableArea')" value="Print Invoice" /></center>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
<br><br><br>
</div>
 <br> <br> <br> <br> <br> <br>