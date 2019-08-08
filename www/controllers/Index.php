<?php
require_once 'conect.php';
class Index extends Controller{
    function __construct($params){
     parent::__construct();

     $this -> view -> controller = "Index";
     $this -> view -> page = $params[1];
     require_once 'models/Index_model.php';
     $this -> model = new Index_model();


  
     $action=$params;
     if(isset($params[1])) $action = ucfirst($params[1]);

    $this -> news =$params[1];
     if(isset($params[2])) $this -> date = ucfirst($params[2]);
     $this -> user ="form";
     if(isset($params[3])) $this-> time = ucfirst($params[3]);
     $this -> $action($this -> news, $this -> user);
    }

    private function News($news, $user){
   
        $this -> view -> Render($news,$user);
    }
  

    private function Show(){
        $user= new Model();
        $user = $user->getAll();
        $this -> view -> User = $user;
        $this -> view -> Render($show,$user);
        return $user;
        
    }

    private function Store(){
       
        $name=$_POST["name"];

        $surname=$_POST["surname"];

        $trade=$_POST["trade"]; 
       
        $number=$_POST["number"]; 
       
        $date=$_POST["date"];
       
        $email=$_POST["email"];
    
          $name= htmlentities($name,ENT_QUOTES,"UTF-8" );
          $tab[0]=$name;
          $surname = htmlentities($surname,ENT_QUOTES,"UTF-8" );
          $tab[1]=$surname;
          $trade = htmlentities($trade,ENT_QUOTES,"UTF-8" );
          $tab[2]=$trade;
          $number = htmlentities($number,ENT_QUOTES,"UTF-8" );
          $tab[3]=$number;
          $tab[4]=$date;
          $email = htmlentities($email,ENT_QUOTES,"UTF-8" );
          $tab[5]=$email;
          $instance=connect_DB::getInstance();
          $query="INSERT INTO form_base values (NULL,?,?,?,?,?,?)";
          //$query="INSERT INTO testowa values (NULL,'$imie','$nazwisko','$zawod','$nr_telefonu','$data_ur','$email')";
          $stmt = $instance->prepare($query);
          $stmt->bindParam(1, $name,  PDO::PARAM_STR,12);
          $stmt->bindParam(2, $surname, PDO::PARAM_STR, 12);
          $stmt->bindParam(3, $trade, PDO::PARAM_STR, 12);
          $stmt->bindParam(4, $number, PDO::PARAM_INT);
          $stmt->bindParam(5, $date, PDO::PARAM_LOB);
          $stmt->bindParam(6, $email, PDO::PARAM_STR,12);
          $stmt->execute();
          $store="store";
          $user=$data;
          $user= new Model();
          $user = $user->getAll();
         

           $this -> view -> Render($store,$user);
      
    }

    private function Delete(){
       
        $value=$_POST["id"];
        $user= new Model();
        $user = $user->getBy($value);
        $instance=connect_DB::getInstance();
        $q = "SELECT name FROM form_base WHERE id='$value'";
        $data = $instance->query($q);
        $row = $data->fetch();
        $user=$row['name'];

      
        $query="DELETE FROM form_base  WHERE id= '$value'";
          $stm = $instance->prepare($query);
          $stm->execute();
        $delete="delete";

        $this -> view -> Render($delete,$user);
    }

    private function Edit(){
       
        $value=$_POST["id"];
        $user= new Model();
        $user = $user->getBy($value);
        $edit="edit";

        $this -> view -> Render($edit,$user);
    }
    private function Update(){
       
        $id=$_POST["id"];
        $name=$_POST["name"];
        $name = htmlentities($name,ENT_QUOTES,"UTF-8" );
        $surname=$_POST["surname"];
        $surname = htmlentities($surname,ENT_QUOTES,"UTF-8" );
        $trade=$_POST["trade"];
        $trade = htmlentities($trade,ENT_QUOTES,"UTF-8" );
        $number=$_POST["number"];
        $number = htmlentities($number,ENT_QUOTES,"UTF-8" );
        $date=$_POST["date"];
        $email=$_POST["email"];
        $email = htmlentities($email,ENT_QUOTES,"UTF-8" );

        $instance=connect_DB::getInstance();
        //$query="UPDATE testowa SET imie='$imie', nazwisko='$nazwisko',zawod='$zawod',nr_telefonu='$nr_telefonu',data_ur='$data_ur' ,email='$email' WHERE id='$id'";
        $query="UPDATE form_base SET name=?, surname=?,trade=?,number=?,date=?,email=? WHERE id='$id'";
        $stmt = $instance->prepare($query);
        $stmt->bindParam(1, $name,  PDO::PARAM_STR,12);
        $stmt->bindParam(2, $surname, PDO::PARAM_STR, 12);
        $stmt->bindParam(3, $trade, PDO::PARAM_STR, 12);
        $stmt->bindParam(4, $number, PDO::PARAM_INT);
        $stmt->bindParam(5, $date, PDO::PARAM_LOB);
        $stmt->bindParam(6, $email, PDO::PARAM_STR,12);
        $stmt->execute();

        $user= new Model();
        $user = $user->getBy($id);
      
        $update="update";
        $this -> view -> Render($update,$user);
    }
    private function Show_all(){
       
     
        $user= new Model();
        $user = $user->getAll2();
        $show_all="show_all";

        $this -> view -> Render($show_all,$user);
    }
 public function Email(){
       
     
        $user= new Index_model();
        $user = $user->check_email();
        $email="email";

        $this -> view -> Render($email,$user);
    }

}