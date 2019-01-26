<?php
session_start();
if(!empty($_POST["login"])) {
	$conn = mysqli_connect("localhost", "root", "", "firphire");
	$sql = "Select * from userlogin where username = '" . $_POST["username"] . "' and password = '" . md5($_POST["password"]) . "'";
	$result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["userid"] = $user["userid"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["login"])) {
					setcookie ("login","");
				}
				if(isset($_COOKIE["password"])) {
					setcookie ("password","");
				}
			}
	} else {
		$message = "Invalid Login";
	}
}
?>