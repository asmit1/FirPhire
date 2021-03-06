<!DOCTYPE html>
<html>

    <head>
        <title>Quiz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="quiz.css">
    </head>

    <body>
         <div class="container-fluid">

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
                            <a class="nav-link" href="quiz.php">Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register1.php">Register</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <div id="quiz"></div>
        <div class = "container">
            <div class="alert alert-primary" role="alert">
                <h1>QUIZ</h1>
            </div>
            <div class = "question">
                <p id="question"></p>
            </div>	
            <div class="row">
                <div class="col coldesg"><button class="btn btn-primary btn-sm buttondesg " id ="btn0"><span id="choice0"></span></button></div> 
                <div class="col coldesg"><button class="btn btn-secondary btn-sm buttondesg" id ="btn1"><span id="choice1"></span></button></div>
                <div class="w-100"></div>
                <div class="col coldesg"><button  class="btn btn-primary btn-sm buttondesg" id ="btn2"><span id="choice2"></span></button></div>
                <div class="col coldesg"><button  class="btn btn-secondary btn-sm buttondesg" id ="btn3"><span id="choice3"></span></button></div>
            </div>
                  <footer>
            <p id="progress">Question x of y.</p>
        </footer>
        </div>
        </div>
        <script type="text/javascript" src="quiz_controller.js"></script>
        <script type="text/javascript" src="question.js"></script>
        <script type="text/javascript" src="app.js"></script>
    </body>

</html>