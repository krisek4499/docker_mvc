<?php
require_once 'conect.php';

class Router{
    
    function __construct(){
       
       $this -> request = $_GET['url'];
        //ucina znak / 
        $this -> request = rtrim($this -> request, "/");
        //explode rozbija ciag znaków oddzielony separatorem /
        $this -> params = explode("/", $this -> request);
    
        $this -> controller = $this -> params[0];
        if($this -> controller == "index.php") $this -> controller = "news";
        //ucfirst pierwsza litera duza
        //$this -> controller = ucfirst($this -> controller); 
        
        $file = 'controllers/'. $this -> controller . '.php';

            if(file_exists($file)){
          
            require_once $file;
            $this -> control = new $this -> controller ($this -> params);
             }
            else{
                require_once 'views/Index/News.php';
                 //echo 'Nieznana metoda!';
                }
    }
}
