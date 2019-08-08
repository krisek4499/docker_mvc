<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

  "http://www.w3.org/TR/html4/strict.dtd">

<html lang="pl">
 <head>
   <title>Formularz ajax</title>
   <meta charset="utf-8">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/app.css" rel="stylesheet">
   <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
   <script src="../js/validations.js" type="text/javascript"></script>
 </head>

 <body>

    <div class="top"><div class="top2"> </div> </div>
    <div class="content">
      <div class="navbar-nav">
        <div class="list-group">
           <a href="/Index/show_all" class="list-group-item list-group-item-action list-group-item-success active">Wyświetl użytkowników</a>
           <a href="/news" class="list-group-item list-group-item-action ">Formularz</a>
        </div>
      </div>
     </div>
    <div class="container">
    <div class="jumbotron">
         <h1 class="headerSection">Dziękujemy za zarejestrowanie</h1>
        </div>
     <div class="row">
       <div class="col-sm-12">
          <?php
           if($User!="niepoprawny email"&&$User!="wypełnij wszystkie pola"&&$User!="niepoprawny numer telefonu") {?>
                <br><i>Imię: <?= $User[0] -> imie ?></i></br>
                <br><i>Nazwisko: <?= $User[0] -> nazwisko ?></i></br>
                <br><i>Zawód: <?= $User[0] -> zawod ?></i></br>
                <br><i>Numer telefonu: <?=  $User[0] -> nr_telefonu ?></i></br>
                <br><i>Data urodzenia: <?= $User[0] -> data_ur ?></i></br>
                <br><i>Email: <?= $User[0] -> email ?></i></br>
                <form action="delete" method="post">
	          <input type="hidden" name="id" value="<?php echo $User[0] -> id ; ?>" />
            <input type="submit" class="btn btn-danger w-25" name="usun" value="usun" />
            </form>
		        <form action="edit" method="post">
	          <input type="hidden" name="id" value="<?php echo $User[0] -> id ; ?>" />
            <input type="submit" class="btn btn-success w-25 " name="edytuj" value="edytuj" />
            </form>
          <?php } else{
          ?>
           <div class="row"> 
           <div class="col-md-12 text-center">
           <br><br></br><a href="#" class="btn btn-danger btn-sm">Błąd: <?= $User ?></a></br>
           <form action="/news" method="post">
	         <input type="hidden" name="id" value="<?php echo $User ?>" />
           <input type="submit" class="btn btn-success" name="powrót do formularza" value="powrót do formularza" />
           </form>
         
           </div>
           </div>
          <?php }?>
        </div>
     </div>
    </div>
    <div class="footer"><div class="footer2"></div> </div>
  </body>
</html>