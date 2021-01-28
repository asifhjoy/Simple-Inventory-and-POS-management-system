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


$usertype = $_POST["usertype"];
$usertable = "";
$tuname="";
$tpw="";

if($usertype=="admin")
{
    $usertable="admin";
}
else
{
    $usertable="employee";
}

$sql = "SELECT * FROM $usertable";
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
     while($row = $result->fetch_assoc()) 
     {
        $tuname=  $row["uname"];
        $tpw =  $row["pw"];
     }
    
} 



if ($tuname==$_POST["uname"] && $tpw==$_POST["pw"]) 
{
    if($usertable=="admin")
    {
        header('Location: adminlandingpage.html');
    }
    else
    {
        header('Location: employeelandingpage.php');
    }
    
} 
else
{
    echo "<script>alert('Incorrect Username or Password!!! Go back to Login Page and TRY AGAIN.');</script>";
    
}
$conn->close();
?>