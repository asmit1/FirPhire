<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="resources/css/bootstrap/content/Content/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/style.css">
        <title>Firphire | Login</title>
    </head>
    <body>
        <div class="container mt-5 ">
            <div class="row justify-content-md-center">
                <div class="col col-md-4 border">
                   <h1>Login</h1>
                    <form method="post" action="login_server.php">
                        <div class="form-group">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="username" placeholder="User Name">
                            </div>
                        </div>            
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        <label >Not a member?<a href="register1.php">Register</a></label>

                    </form>
                </div>
            </div>
        </div>


    </body>
</html>