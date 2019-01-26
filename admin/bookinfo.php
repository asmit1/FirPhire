<?php
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

$sql = "SELECT * FROM bookscontent";
$result = $conn->query($sql);
$sql = "SELECT bookscontent.id,bookscontent.path,bookscontent.booktitle,bookscontent.description,userlogin.username FROM videos,userlogin WHERE bookscontent.userid=userlogin.userid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

echo "<table border='1'>"."<tr>"."<td>"."videoid"."</td>"."<td>"."username"."</td>"."<td>"."booktitle"."</td>"."<td>"."path"."</td>"."<td>"."description"."</td>"."</tr>";
    //output data of each row
 while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>". $row["id"]."</td>"."<td>".$row["username"]."</td>"."<td>".$row["booktitle"]."</td>"."<td>".$row["path"]."</td>"."<td>".$row["description"]."</td>"."</tr>";
    }
    echo "</table>";} else {
    echo "0 results";
}

$conn->close();
?> 
