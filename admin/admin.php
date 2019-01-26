<?php
session_start();
// Create connection
$conn = new mysqli("localhost","root","","firphire");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$viewers=0;
$totalvideo=0;
$totalbooks=0;
$publishers=0;

//count viewers
$sql = "SELECT count(*) as total from userlogin WHERE role ='Viewer'";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$viewers = $data['total'];


//count publisher
$sql = "SELECT count(*) as total from userlogin WHERE role ='Publisher'";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$publishers = $data['total'];

$sql = "SELECT count(*) as total from videoscontent";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$totalvideo = $data['total'];
$sql = "SELECT count(*) as total from bookscontent";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$totalbooks = $data['total'];
$conn->close();
?>
