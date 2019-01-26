<?php

if(isset($_POST['submit']))
{

//    print_r($_POST);
    //die();

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword =$_POST['cpassword'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $connection = mysqli_connect('localhost','root','','firphire');
    if($cpassword == $password)
    {
        //   $hashFormat="$2y$10$";
        // $salt = "ty12iu&oi3uilkm09#rep0";

        // $hash_salt = 
        $hashFormat . $salt;

        $password = md5($cpassword);
        $query = "INSERT INTO userlogin(email,username,password,gender,role)VALUES('$email','$username','$password','$gender','$role')";
        $result = mysqli_query($connection,$query);
        //        echo "matched";

        // $hashFormat="$2y$10$";
        // $salt = "ty12iu&oi3uilkm09#rep0";

        // $hash_salt = $hashFormat . $salt;

        // $password = md5($hash_salt);

      // echo $password;
    }
    else
        echo("Password not matched");
    header('Location:login.php'); 
        
        
}
else{
    header('Location: /FIRphire');
}
?>










