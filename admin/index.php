<?php
require('../system/config.php');

?>


<html>
    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    </head>

    <body>
        <?php if($user->is_logged_in()){ ?>

        <div class="row">
            <div class="col-md-4 card">
                <h2>Options</h2>
                <ul>
                    <li><a href="?add-posts">Add Post</a></li>
                    <li><a href="?view-posts">View Posts</a></li>
                </ul>
            </div>


            <div class="col-8 card">
                
            <?php 
                if(isset($_GET['add-posts'])){ ?>




                <div class="container">
                    <form class="form" method="post" action="add_posts.php">
                        <div class="form-group">
                            <input type="text" name="postTitle" placeholder="Post Title">
                        </div>


                        <div class="form-group">
                            <textarea type="text" name="postContent" placeholder="Post Content">


                            </textarea>
                        </div>


                        <div class="form-group">
                            <input type="submit" value="Submit">
                        </div>
                        
                    </form>
                </div>



            <?php } else if(isset($_GET['view-posts'])){ ?>
            





            <?php } ?>
            </div>
        </div>
    
    
        <?php
        
            }else{
            header("Location: login.php");
            exit;
        }

        ?>
    </body>


</html>