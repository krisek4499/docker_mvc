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

<div class="top"> <div class="top2"> </div></div>
    <div class="TRESC">
      <div class="navbar-nav">
        <div class="list-group">
           <a href="/Index/show_all" class="list-group-item list-group-item-action list-group-item-success active">Wyświetl użytkowników</a>
           <a href="/news" class="list-group-item list-group-item-action ">Formularz</a>
          </div>
        </div>
      </div>
  <div class="container">
   <div class="jumbotron">
     <h1 class="headerSection">Skontaktuj się z nami</h1>
   </div>       
               <?php if($User) {?>
                <br><i>Edytowałes swoje dane: </i></br>
                <br><i>Imię: <?= $User[0] -> imie ?></i></br>
                <br><i>Nazwisko: <?= $User[0] -> nazwisko ?></i></br>
                <br><i>Zawód: <?= $User[0] -> zawod ?></i></br>
                <br><i>Numer telefonu: <?=  $User[0] -> nr_telefonu ?></i></br>
                <br><i>Data urodzenia: <?= $User[0] -> data_ur ?></i></br>
                <br><i>Email: <?= $User[0] -> email ?></i></br>

                <form action="/news" method="post">
                <input type="submit" class="btn btn-success" value="powrót do formularza" />
                </form>
             
           
               <?php } else{?>
           <div class="row">
              <div class="col-md-12 text-center">
               <h3>Nie udało sie edytować użytkownika.</h3>
              </div>
           </div>
              <?php }?>
    </div> 
   </div>
  </div>
  <div class="STOPKA"> <div class="STOPKA2"> </div></div>
</body>
</html>