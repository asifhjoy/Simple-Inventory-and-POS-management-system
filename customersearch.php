<html>

<title> UCL : Customer Info </title>
<head>

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
</head><br>
<body>

  

<center>



  

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";
$p_id="";
$lastinv="";
$ph="";


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

    $lastinv= $row['inv'];
  }      
    
}

$sqlph = "SELECT phone from invoice WHERE inv=$lastinv";
$resultph = $conn->query($sqlph);
if ($resultph->num_rows > 0) 
{
  
  while($row = $resultph->fetch_assoc())
  {

    $ph= $row['phone'];
  }      
    
}


if(isset($ph)){
$p_id=$ph;
}




$sql = "SELECT * FROM customer where phone='$p_id'";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row

  echo "<br><br>";
  echo "<table><tr><th><center>Customer Name</th><th>Phone</th><th>Address</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {

  echo "<tr>";
        echo "<td>". $row["name"]. "</td><td>" . $row["phone"]."</td><td>" . $row["addr"]."</td>";
  echo "</tr>";
    }
echo "</table>";

echo "<br><br>";

echo "<form method='POST' action='invoice.php'>
<input type='hidden' name='invoice' value = $lastinv>
    <button type='submit' class='button'><b>Proceed</b></button>
  </form></h3>";


}

else{

   echo "<p style='font-size:25px'><b><u>Customer Information</u></b></p>

   <form action='custin.php' method='POST' style='font-size:20px'>
   <div class='row'>
    <div class = 'column'> Name : </div>
    <div class ='column'> <input type='text' name='name' style='font-size:20px' > </div><br><br>
    <div class = 'column'>Phone Number :  </div>
    <div class = 'column'> <input type='text' name='phone' style='font-size:20px' value=$ph >  </div><br><br>
    <div class = 'column'>Address : </div>
    <div class = 'column'> <input type='text' name='addr' style='font-size:20px' >  </div><br><br>
    </div> 
    <button type='submit' class = 'button'> Proceed </button>
   
   
   
   
   <br><br>";

}
echo "<br><br><br>";






mysqli_close($conn);
?>