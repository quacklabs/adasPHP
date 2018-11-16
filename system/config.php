<?php
session_start();


//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','root');
define('DBNAME', 'myblog');



//Instantiate our database
$db = new PDO("mysql:host=localhost;dbname=myblog", "root", "root");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//set timezone
date_default_timezone_set('Africa/Lagos');



// //load classes as needed
// spl_autoload_register(function ($class) {
   
//     $class = strtolower($class);
//  	//if call from within assets adjust the path
//     $classpath = './class.'.$class . '.php';
//     if ( file_exists($classpath)) {
//        require_once($classpath);
//  	} 	
	
//  	//if call from within admin adjust the path
// //     $classpath = './'.$class . '.php';
// //    if ( file_exists($classpath)) {
// //        require_once $classpath;
// //  	}
	
// //  	//if call from within admin adjust the path
// //     $classpath = $class . '.php';
// //     if ( file_exists($classpath)) {
// //       require_once $classpath;
// //     } 		
// });
     
require_once('class.user.php');
require_once('posts.php');

$user = new User($db);


$posts = new Posts($db);


?>