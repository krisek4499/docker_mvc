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
           <a href="/Index/show_all" class="list-group-item list-group-item-action list-group-item-success active ">Wyświetl użytkowników</a>
            <a href="/news" class="list-group-item list-group-item-action ">Formularz</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
     <div class="row">
       <div class="col-sm-12">
          <?php
          $i=0;
          ?><table class="table border border-secondary  table-dark rounded" style="width: 100%; height: 5em" >
          <tr><td style="width: 5%;">Id: </td>
          <td style="width:12%;" >Imie: </td>
          <td style="width:12%;" >Nazwisko: </td>
          <td style="width:15%;"  >Zawód:</td>
          <td style="width:15%;" >Numer telefonu: </td>
          <td style="width:15%;" >Data urodzenia: </td>
          <td style="width:15%;" >Email:</td>
          <td style="width:11%;" >Edycja:</td>
          </tr><?php
          While(isset($User[$i]))
          {
          ?>
          <table class="table table-hover border border-secondary rounded"   style="width: 100%; height: 5em">
          <tr>
          <td style="width:5%;" ><?= $User[$i] -> id?></td>
          <td style="width:12%;"  > <?= $User[$i] -> imie ?></td>
          <td style="width:12%;"  > <?= $User[$i] -> nazwisko ?></td>
          <td style="width:15%;"  > <?= $User[$i] -> zawod ?></td>
          <td style="width:15%;" > <?= $User[$i] -> nr_telefonu ?></td>
          <td style="width:15%;"  > <?= $User[$i] -> data_ur ?></td>
          <td style="width:15%;" > <?= $User[$i] -> email ?></td>
          <td style="width:11%;" ><form action="edit" method="post">
	        <input type="hidden" name="id" value=<?php echo $User[$i] -> id ; ?> />
          <input type="submit" class="btn btn-success" name="edytuj" value= "Edytuj"/>
          </form></td></tr>
          </table>
          <?php
          $i++;}?>
          <form action="/news" method="post">
          <input type="submit" class="btn btn-success" value="powrót do formularza" />
          </form>
        </div>
      </div>
    </div>
    <div class="footer"><div class="footer2"> </div>
  </body>
</html>