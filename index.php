<?php
require("system/config.php");

if(isset($_GET['post'])){
    $title = ucwords($_GET['post']);//$posts->title;
    $blog_posts = $posts->get_posts($_GET['id']);


}else{
    $title = "Home";
    $blog_posts = $posts->get_posts();
}
?>

<html>
    <head>
        <title><?php echo $title; ?> - MyBlog </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-brand">
                <h2>MyBlog</h2>
            </div>
            <div class="navbar-nav">
                <ul>

                </ul>
            </div>
        </nav>

        <div class="container">
            <section>  
                <?php


                    foreach($blog_posts as $row) { ?>


                    <div class="card">
                        <div class="card-heading">
                            <h2><?php echo $row->title; ?></h2>
                        </div>


                        <div class="card-body">
                            <p><?php echo $row->description; ?></p>

                            <p><a class="btn btn-info" href="?post&id=<?php echo $row->id;?>">Read More</a></p>
                            <p>Date published: <?php echo date("Y-m-d H:s:is", $row->date_published); ?></p>
                        </div>
                    </div>

                  <?php  
                  
                
                }



                ?>
                
            </section>
        </div>
        


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>


</html>