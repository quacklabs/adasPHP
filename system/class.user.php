<?php


class User{

    private $db;

    public function __construct($arg){
        $this->db = $arg;
    }



    //Register new user
    public function register(){

        //TODO: Create registration form

    }


    //login User
    public function login($name, $pass){

        //check user credentials
        $query = $this->db->query("SELECT * FROM users WHERE username = '$name' AND password_hash = '$pass'");


       //fetch result from database
       $results = $query->fetch(PDO::FETCH_OBJ);

       //check if result contains data
        if($results){
            $_SESSION['logged_in'] = TRUE;
            return TRUE;
        }else{
            return FALSE;
            
            
        }
    }


    public function is_logged_in(){

        if(isset( $_SESSION['logged_in'] ) && $_SESSION['logged_in'] != FALSE){

            return TRUE;

        }else{
            return FALSE;
        }
    }



}


?>