
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
         <h1 class="headerSection">Edytuj swoje dane</h1>
        </div>
      
       <form action="/Index/update" method="post">
         <input type="hidden" name="id" value=<?=$User[0]->id?> />
         <div class="form-group mb-3 ">
            <div class="input-group-prepend">
             <span class="input-group-text " id="basic-addon1"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imię&nbsp;&nbsp;&nbsp;&nbsp;</strong></span>
             <input type="text" name="name"  class="form-control" aria-describedby="basic-addon1" required="required" placeholder="Wpisz tu swoje Imię" onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->name ?>  />
           </div>
         </div>

         <div class="form-group mb-3 ">
           <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1"><strong>Nazwisko&nbsp; </strong></span>
             <input type="text" name="surname" class="form-control" required="required" placeholder="Wpisz tu swoje Nazwisko" onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->surname ?> />
            </div>
         </div>

         <div class="form-group mb-3 ">
           <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1"><strong>&nbsp;&nbsp;Numer&nbsp;&nbsp;&nbsp;</strong></span>
             <input type="text" name="number" class="form-control" required="required" placeholder="Wpisz tu swój numer telefonu" onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->number ?> pattern="[0-9]*[0-9]{8}"/>
            </div>
         </div>
     
         <div class="form-group mb-3 ">
           <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1"><strong>&nbsp;&nbsp;Zawód&nbsp;&nbsp;&nbsp;</strong></span> 
             <input type="text" name="trade" class="form-control" required="required"  placeholder="Wpisz tu swój zawód"onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->trade ?> >
            </div>
         </div>
        
         <div class="form-group mb-3 ">
           <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Data&nbsp;&nbsp;&nbsp;&nbsp;</strong></span> 
             <input type="date" name="date" class="form-control" required="required" placeholder="Wpisz tu swoją date urodzenia" onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->date ?> >
            </div>
         </div>

         <div class="form-group mb-3 ">
           <div class="input-group-prepend">
             <span class="input-group-text " id="basic-addon1"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;</strong></span> 
             <input type="email" name="email" class="form-control" required="required" placeholder="Wpisz tu swój Email" value=<?=$User[0]->email ?> >
            </div>
          </div>

          <div class="form-group row">
           <div class="col-sm-2">  </div>
            <div class="col-sm-10">  
              <div class="emailFormAlert"></div>
            </div>
          </div>
         <div class="form-group row">
           <div class="col-sm-1">  </div>
           <div class="col-sm-10">  
             <input id="submit" type="submit" value="Edytuj" class="btn btn-success w-25"/>
           </div>
          </div>
        </form>
        <form action="delete" method="post">
         <div class="form-group row">
           <div class="col-sm-1">  </div>
            <div class="col-sm-10">  
              <input type="hidden" name="id" value="<?php echo $User[0] -> id;?>" />
              <input type="submit" class="btn btn-danger w-25" name="usun" value="usun" />
           </div>
          </div>
        </form>
      </div>
   </div>
   <div class="footer"> <div class="footer2"> </div></div>
 </body>
</html>