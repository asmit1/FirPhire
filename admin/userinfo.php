<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firphire";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM userlogin Where role='Viewer'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table border='1'>"."<tr>"."<td>"."userid"."</td>"."<td>"."username"."</td>"."<td>"."Gender"."</td>"."<td>"."Role"."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>". $row["userid"]."</td>"."<td>".$row["username"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["role"]."</td>" ."</tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
session_destroy();
?> 
