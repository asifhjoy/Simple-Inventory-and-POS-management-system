<title> UCL : Laptop </title>
<head>
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
		
		

<center>
<form method='POST' action = 'laptop_inaction.php'>


<h2 style='font-size:120%;'><u> Add Product </u></h2><br>


Name : <input type='text' style='font-size:100%;' name='name' >
Quantity : <input type='number' style='font-size:100%;' name='quantity'>
Price Per Unit :  <input type='text' style='font-size:100%;' name='ppu'><br><br>

 <button class='button' ><b><big>Submit</big></button>
  <br><br>
</form>


<style>
table, th, td {
     border: 3px solid black;
     color: black;
     border-collapse:collapse;
     text-align: center;
     margin: auto;
     height: 50px;
     width: 1200px;
}
</style>

<body>





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

$sql = "select * FROM laptop";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>S/N</th><th>Model Name</th><th>Quantity</th><th>Price</th><th>Edit</th><th>Delete</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["sn"]. "</td><td>" . $row["name"]. "</td><td>" . $row["quantity"] . "</td><td>". $row["ppu"]. "</td><td><a href =laptopedit.php?sn=".$row["sn"].">Edit</a></td><td><a href=laptopdel.php?sn=".$row["sn"].">Delete</a></td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}


$conn->close();
?><br><br>

</body>
<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 
</html>








