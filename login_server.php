<?php
session_start();
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect("localhost","root","","firphire");

    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    $cpassword=md5($password);
    

    $query = "SELECT * FROM userlogin WHERE username  = '{$username}' AND password ='{$cpassword}' ";

    $select_user_query = mysqli_query($connection,$query);
//            $userid = $_SESSION['userid'];
//                    print_r($row['userid']);




    if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($connection));
    }

    $row = mysqli_fetch_array($select_user_query);
   
    $_SESSION['userid']=$row['userid'];
   
    if( $username == $row['username']  )
    {
        if($cpassword == $row['password'])
        {
            if($row['role']=="Superuser")
                header("Location: Admindashboard.php");
            else if($row['role']=="Viewer")
                header("Location: gallery.php");
            else
                header("Location: galleryPublisher.php");
        }
        else{
            echo "Invalid password";
        }

    }
    else 
    {
        echo "Invalid Username or password";
        header("Location: Login.php");


    }


}
?>