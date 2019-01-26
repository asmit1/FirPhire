<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="resources/css/bootstrap/content/Content/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="resources/css/style.css">
        <title>FIRPHIRE  |  Register</title>
    </head>
    <body>
       <span class="border">
          <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col col-md-4">
                    <div class="card">
                        <div class="card-body">
                           <h5 class="card-title">Register</h5>
                            <form method="post" action="register_server.php">
                                <div class="form-group">
                                       <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="username" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
                                </div>
                                

                                <label>Gender:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="male" checked>
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="female">
                                    <label class="form-check-label">Female</label>
                                </div>
                                <br>

                                <label>Register As:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" value="Viewer">
                                    <label class="form-check-label">User</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" value="Publisher" checked>
                                    <label class="form-check-label">Publisher</label>
                                </div>
                                <br><br>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <label >already a member? <a href="Login.php">Login</a></label>
                            </form>
                        </div>
                    </div>



               
                </div>
            </div>
        </div>
           
       </span>
    </body>
</html>






