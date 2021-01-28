<title> UCL : Processor </title>
<head>
<link rel="stylesheet" type="text/css" href="design.css">
<style>
table, th, td {
   
     border-collapse:collapse;
     text-align: center;
     margin: auto;
     height: 30px;
     width: 500px;
}
</style>
</head>
<div class="header">
			<ul>
				
				<li> <a href="adminlandingpage.html">Home</a>
					
				</li>
				
				
			</ul>
		</div>
		<br>
		<br>
		<br>
		<br>
		




<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";

$tsn = "";
$tname = "";
$tq = "";
$tppu = "";




$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["sn"];
		$iod=$id;
		
		$sql = "SELECT * FROM processor where sn=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
	if($row = $result->fetch_assoc())
	{

$tname = $row["name"];
$tq = $row["quantity"];
$tppu = $row["ppu"];
		
	}
}
  
echo "<center>
<form method='POST' action = 'processoreditaction.php'>

<h2 style='font-size:120%;'><u> Update Information </u></h2>
<input type='hidden' name='Iod' value = $iod>
Model Name : <input type='text' style='font-size:100%;' name='name' value = '$tname'>
Quantity : <input type='text' style='font-size:100%;' name='quantity' value = '$tq'>
Price : <input type='text' style='font-size:100%;' name='ppu' value = '$tppu'><br><br>


 <button class='button' ><b><big>Submit</big></button>
  <br><br>
</form>";

	
	
	
	
?>





