<?php
 
 require_once 'conect.php';
class Model{
   function __construct(){}
  
    public function getAll()
     {
         $instance=connect_DB::getInstance();
         $q = 'SELECT id,name,surname,trade,number,date,email FROM form_base ORDER BY id DESC LIMIT 1';
         $stm = $instance->prepare($q);
         $stm->execute();
         $data = $stm->fetchAll(PDO::FETCH_OBJ);
      
       
         if ($data) {
             return $data;
         }
         return null;
     }
     public function getAll2()
     {
         $instance=connect_DB::getInstance();
         $q = 'SELECT id,name,surname,trade,number,date,email FROM form_base ORDER BY id ';
         $stm = $instance->prepare($q);
         $stm->execute();
         $data = $stm->fetchAll(PDO::FETCH_OBJ);
      
       
         if ($data) {
             return $data;
         }
         return null;
     }
     public function getBy($id)
     {
         $instance=connect_DB::getInstance();
         $ID=$id;
         $q = "SELECT id,name,surname,trade,number,date,email FROM form_base Where id='$ID'";
         $stm = $instance->prepare($q);
         $stm->execute();
         $data = $stm->fetchAll(PDO::FETCH_OBJ);
      
      
         if ($data) {
             return $data;
         }
         return null;
     }
  
   }



      