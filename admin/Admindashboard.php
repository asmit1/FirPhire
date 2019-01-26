<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>

            </div>
        </nav>

        <?php include "admin.php"; ?>
        <div class="conainer-fluid">
           <h1>STATISTICS</h1>
            <div class="row">
                <div class="col-sm-3">
                    <div class="alert alert-primary" role="alert">
                        <a href="userdata.php" value="viewers">Users:</a><?php echo $viewers ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="alert alert-secondary" role="alert">
                        <a href="publisherdata.php" value="publishers">	Publisher:</a><?php echo $publishers?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="alert alert-success" role="alert">
                        <a href="videodata.php" value="totalvideo">Total Video:</a><?php echo $totalvideo ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="alert alert-danger" role="alert">
                        <a href="bookdata.php" value="totalbooks">Total books:</a><?php echo $totalbooks?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>