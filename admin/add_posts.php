<?php
require_once('../system/config.php');


$form_data = array(
    "title" => $_POST['postTitle'],
    "content" => $_POST['postContent'],
    "date_published" => time()
);


$posts->add($form_data);



header("Location: index.php");
exit;


?>