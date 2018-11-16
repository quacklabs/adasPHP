<?php


class Posts{

    private $db;


    //post parts
    public $title;
    public $content;
    public $date;

    public function __construct($arg){
        $this->db = $arg;
    }


    public function prepare_content($data){
        $this->title = $data['title'];
        $this->content = addslashes($data['content']);
        $this->date = $data['date_published'];
    }


    public function add($data = array()){
        

        //convert form data to objects of our posts class
        $this->prepare_content($data);



        //prepare our SQL statement
        $exec = $this->db->prepare("INSERT INTO posts(title,content,date_published) VALUES('$this->title', '$this->content', '$this->date');");
        
        
        //execute our SQL statement 
        $result = $exec->execute();


        //check if statement executed
        if($result){
            return True;

        }else{ return false;}

    
    }



    public function get_posts($id = NULL){


        if($id == NULL){
            $query = "SELECT * FROM posts WHERE id";
        }else{
            $query = "SELECT * FROM posts WHERE id = $id";
        }


        $exec = $this->db->query($query);
        $exec->execute();


        $result = $exec->fetchAll(PDO::FETCH_OBJ);

        return $result;
        
    }
}

?>