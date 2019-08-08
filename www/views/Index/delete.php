<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

  "http://www.w3.org/TR/html4/strict.dtd">

<html lang="pl">
 <head>
   <title>Formularz ajax</title>
   <meta charset="utf-8">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/apps.css" rel="stylesheet">
   <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
   <script src="../js/validation.js" type="text/javascript"></script>
 </head>
 <body>

 <div class="top"><div class="top2"> </div> </div>
    <div class="TRESC">
       <div class="navbar-nav">
          <div class="list-group">
           <a href="/Index/show_all" class="list-group-item list-group-item-action list-group-item-success active">Wyświetl użytkowników</a>
           <a href="/news" class="list-group-item list-group-item-action ">Formularz</a>
          </div>
        </div>
      </div>
    <div class="container">
     <div class="row">
       <div class="col-sm-12">
         <?php
         if($User) {?>
          <br><i>Usunąłeś swoje dane: <?= $User ?></i></br>
            <form action="/news" method="post">
             <input type="submit" class="btn btn-success w-25" value="powrót do formularza" />
            </form>
          <?php } else{?>
         <div class="row">
            <div class="col-md-12 text-center">
              <h3>Nie udało sie usunac uzytkownika.</h3>
            </div>
          </div>
         <?php }?>
       </div>
     </div>
   </div>
   <div class="STOPKA"> </div>
 </body>
</html>