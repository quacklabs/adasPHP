<?php

require_once('../system/config.php');

if($_POST){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if($user->login($username, $password) == TRUE){

        
        header("Location: index.php");
    }else{
        echo "login failed";
    }
}
?>


<html>
    <head>
        <title>
            Login
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    </head>


    <body>

        <div class="container">
            <div class="row">
            <div class="card col-6 col-md-offset-3">
                <form class="form" action="" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="username" type="text" placeholder="username">
                    </div>


                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="password">
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
            </div>
            
            
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    </body>
</html>