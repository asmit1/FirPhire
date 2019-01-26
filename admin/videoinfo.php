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
$sql = "SELECT videoscontent.id,videoscontent.path,videoscontent.description,videoscontent.videotitle,userlogin.username FROM videoscontent,userlogin WHERE videoscontent.userid=userlogin.userid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

echo "<table border='1'>"."<tr>"."<td>"."videoid"."</td>"."<td>"."Video title"."</td>"."<td>"."username"."</td>"."<td>"."path"."</td>"."<td>"."description"."</td>"."</tr>";
    //output data of each row
 while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>". $row["id"]."</td>"."<td>".$row["videotitle"]."</td>"."<td>".$row["username"]."</td>"."<td>".$row["description"]."</td>"."<td>".$row["description"]."</td>"."</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
session_destroy();
?> 
