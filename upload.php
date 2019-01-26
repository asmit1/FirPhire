<?php
//if(isset($_POST['submit'])){
//    $videos = $_FILES['videos'];
//path to store the uploaded videos.
//    $msg="";
//    $target = "videosContent/".basename($_FILES['videos']['name']);
//
//        //path to connect database    
//        $connect = mysqli_connect('localhost','root','','firphire');
//
//    $text = $_POST['text'];
//    $videos = $_FILES['videos']['name'];
//
//    $query = "INSERT INT0 videosContent (userId,videoId,description,path,views) VALUES ('$videos','$text')";
//    $result = mysqli_query($connect,$query);//stores the submitted data into the database
//
//
//    //get all submitted data from the form
//    if(move_uploaded_file($_FILES['videos']['tmpname'],$target)){
//        echo "Video Uploaded Successfully";
//    }
//    else 
//        echo "There was problem uploading file";




// print_r($file);
// $fileName = $_FILES['file']['name'];
// $fileTmpName = $_FILES['file']['tmpname'];
// $fileSize = $_FILES['file']['name'];
// $fileError = $_FILES['file']['error'];
// $fileType = $_FILES['file']['type'];
//    
//    $fileExt = explode('.',$fileName);
//    $fileActualExt = strtolower(end($fileExt));
//    $allowed = array('mp4');
//    
//    if(in_array($fileActualExt,$allowed))
//    {
//        if($fileError === 0){
//            if($fileSize <100000000000){
//                $fileNamenew = uniqid('',true).".".$fileActualExt;
//                $fileDestination = 'uploads/'.$fileNamenew;
//                move_uploaded_file($fileTmpName,$fileDestination);
//                header("Location:index.php?uploadsuccess");
//                
//            }
//            else 
//                echo "Your file is too big";
//        }
//        else 
//            echo "there was problem uploading picture";
//    }


//}
?> 


<?php
session_start();
if(isset($_POST['submit']))
{   
  
    print_r( $_SESSION['userid']);
      $userid = $_SESSION['userid'];
    if(!empty($_FILES['uploaded_file']))
    {
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/FIRphire/uploads/";
        $target_file = $target_dir . basename($_FILES["uploaded_file"]["name"]);

        $title = $_FILES['uploaded_file']['name'];
        $description = $_POST['textarea'];

        if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $target_file)) {
            $connect = mysqli_connect('localhost','root','','firphire');
            if($connect){
                $query = "INSERT INTO videoscontent(userid,videotitle,description,path) VALUES('$userid','$title','$description','$target_file')";
                print_r(  $query);
                $result = mysqli_query($connect,$query);
                if($result){
                    echo "Good";
                }
                else 
                    echo "sorry";
            }


        } else {
            print_r($_FILES);
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>




























