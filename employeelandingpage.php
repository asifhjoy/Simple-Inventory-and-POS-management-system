<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
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

.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

</style>
  
  <title>UCL</title>
</head>
<body>
<center>
  <h3 align='right'><form method="get" action="index.html">
  <button type="submit" class="button"><b>Logout</b></button>
</form></h3>
<h1>UCL Computer Shop</h1>
</center>
<br>
<br>


<?php  


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";
$lastinv = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlinv = "SELECT * from invoice";
$resultinv = $conn->query($sqlinv);
if ($resultinv->num_rows > 0) 
{
  
  while($row = $resultinv->fetch_assoc())
  {

    $lastinv= $row['inv'];
  }      
    
}

echo "<form action='checkout.php' method='POST' style='font-size:20px' >

<br><br>
<div class = 'row'>
<div class = 'column'>Invoice No. :  </div>
 <div class = 'column'> $lastinv </div></div><br>
<div class ='row'>
 <div class = 'column'>Phone Number :  </div>
 <div class = 'column'> <input type='text' name='phone' style='font-size:20px' ></div>  </div><br><br>
 <input type='hidden' name='inv' value=$lastinv >

<p style='font-size:25px'><b><u>Products</u></b></p>";



$sqlcase = "SELECT * FROM casing";
 
$resultcase = $conn->query($sqlcase);
echo "<select name='casing' style='font-size:20px'>";
echo "<option value='0' >Select Casing...</option>";

if ($resultcase->num_rows > 0) 
{
  
  while($row = $resultcase->fetch_assoc())
  {

    if($row['quantity']>0){

      echo     "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqlpro = "SELECT * FROM processor";
 
$resultpro = $conn->query($sqlpro);
echo "<select name='processor' style='font-size:20px'>";
echo "<option value='0' >Select Processor...</option>";

if ($resultpro->num_rows > 0) 
{
  
  while($row = $resultpro->fetch_assoc())
  {

    if($row['quantity']>0){

      echo     "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqlmobo = "SELECT * FROM motherboard";
 
$resultmobo = $conn->query($sqlmobo);
echo "<select name='mobo' style='font-size:20px'>";
echo "<option value='0' >Select Motherboard...</option>";

if ($resultmobo->num_rows > 0) 
{
  
  while($row = $resultmobo->fetch_assoc())
  {

    if($row['quantity']>0){

      echo     "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";


$sqlvga = "SELECT * FROM vga";
 
$resultvga = $conn->query($sqlvga);
echo "<select name='vga' style='font-size:20px'>";
echo "<option value='0' >Select Graphics Card...</option>";

if ($resultvga->num_rows > 0) 
{
  
  while($row = $resultvga->fetch_assoc())
  {

    if($row['quantity']>0){

      echo     "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqlram = "SELECT * FROM ram";
 
$resultram = $conn->query($sqlram);
echo "<select name='ram' style='font-size:20px'>";
echo "<option value='0' >Select RAM...</option>";

if ($resultram->num_rows > 0) 
{
  
  while($row = $resultram->fetch_assoc())
  {

    if($row['quantity']>0){

      echo     "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqldd = "SELECT * FROM dd";
 
$resultdd = $conn->query($sqldd);
echo "<select name='dd' style='font-size:20px'>";
echo "<option value='0' >Select SSD / HDD...</option>";

if ($resultdd->num_rows > 0) 
{
  
  while($row = $resultdd->fetch_assoc())
  {

    if($row['quantity']>0){

      echo     "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqlpsu = "SELECT * FROM psu";
 
$resultpsu = $conn->query($sqlpsu);
echo "<select name='psu' style='font-size:20px'>";
echo "<option value='0' >Select Power Supply...</option>";

if ($resultpsu->num_rows > 0) 
{
  
  while($row = $resultpsu->fetch_assoc())
  {

    if($row['quantity']>0){

      echo     "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqlmon = "SELECT * FROM monitor";
 
$resultmon = $conn->query($sqlmon);
echo "<select name='mon' style='font-size:20px'>";
echo "<option value='0' >Select Monitor...</option>";

if ($resultmon->num_rows > 0) 
{
  
  while($row = $resultmon->fetch_assoc())
  {

    if($row['quantity']>0){

      echo    "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqlkbm = "SELECT * FROM kbm";
 
$resultkbm = $conn->query($sqlkbm);
echo "<select name='kbm' style='font-size:20px'>";
echo "<option value='0' >Select Keyboard / Mouse...</option>";

if ($resultkbm->num_rows > 0) 
{
  
  while($row = $resultkbm->fetch_assoc())
  {

    if($row['quantity']>0){

      echo     "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqlsound = "SELECT * FROM sound";
 
$resultsound = $conn->query($sqlsound);
echo "<select name='sound' style='font-size:20px'>";
echo "<option value='0' >Select Headphone / Speaker...</option>";

if ($resultsound->num_rows > 0) 
{
  
  while($row = $resultsound->fetch_assoc())
  {

    if($row['quantity']>0){

      echo     "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqlacs = "SELECT * FROM accessories";
 
$resultacs = $conn->query($sqlacs);
echo "<select name='acs' style='font-size:20px'>";
echo "<option value='0' >Select Other Accessories...</option>";

if ($resultacs->num_rows > 0) 
{
  
  while($row = $resultacs->fetch_assoc())
  {

    if($row['quantity']>0){

      echo    "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br>";

$sqllaptop = "SELECT * FROM laptop";
 
$resultlaptop = $conn->query($sqllaptop);
echo "<select name='laptop' style='font-size:20px'>";
echo "<option value='0' >Select Laptop...</option>";

if ($resultlaptop->num_rows > 0) 
{
  
  while($row = $resultlaptop->fetch_assoc())
  {

    if($row['quantity']>0){

      echo    "<option value=".$row['sn'].">".$row['name']." (Price : ".$row['ppu'].")</option>";
    }
  }      
    
}

echo "</select>";
echo "<br><br><br><br>";


echo
"<h3 align='left'><form method='get' action='checkout.php'>
  <button type='submit' class='button'><b>Checkout</b></button>
</form></h3>";








echo "<br><br><br><br><br><br><br><br><br><br>";
?>


</form>

</html>