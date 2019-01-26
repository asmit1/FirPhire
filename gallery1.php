<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="resources/css/bootstrap/content/Content/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/style.css">
        <title>FIRPHIRE  |  Learn  |  Fun </title>

        <style>
            .pb-video-container {
                padding-top: 20px;
                background: #bdc3c7;
                font-family: Lato;
            }

            .pb-video {
                border: 1px solid #e6e6e6;
                padding: 5px;
            }

            .pb-video:hover {
                background: #2c3e50;
            }

            .pb-video-frame {
                transition: width 2s, height 2s;
            }

            .pb-video-frame:hover {
                height: 300px;
            }

            .pb-row {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">FirPhire</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!--
<li class="nav-item active">
<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
-->
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery1.php">Books</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="quiz/quiz.php">Quiz</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                </ul>

            </div>
        </nav>
        <div class="container-fluid pb-video-container">
            <div class="col-md-10 offset-md-1">
                <h3 class="text-xs-center">FirPhire Books Gallery</h3>
                <div class="row pb-row">
                    <?php

                    $connection = mysqli_connect("localhost","root","","firphire");
                    $query = "SELECT * FROM bookscontent";
                    $result = mysqli_query($connection,$query);
                    //                    $row = mysqli_fetch_assoc($result);
                    //                    print_r($row['booktitle']);

                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        echo '<div class="card mb-3">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
                                <source src="uploadbooks/'.$row['booktitle'].'" type="application/pdf,application/vnd.ms-excel">
                                
                                <a href="uploadbooks/'.$row['booktitle'].'"

    <h5 class="card-title">'.$row['booktitle'].'</h5>
    <p class="card-text">'.$row['description'].'</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>