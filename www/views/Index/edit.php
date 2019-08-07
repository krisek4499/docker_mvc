
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

  "http://www.w3.org/TR/html4/strict.dtd">

<html lang="pl">
 <head>
   <title>Formularz ajax</title>
   <meta charset="utf-8">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/appppps.css" rel="stylesheet">
   <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
   <script src="../js/validations.js" type="text/javascript"></script>
 </head>

 <body>

    <div class="top"> </div>
    <div class="TRESC">
      <div class="navbar-nav">
        <div class="list-group">
           <a href="/Index/show_all" class="list-group-item list-group-item-action ">Wyświetl użytkowników</a>
    
           <a href="/Index/news" class="list-group-item list-group-item-action active">Formularz</a>
          </div>
        </div>
      </div>
    <div class="container">
        <div class="jumbotron">
         <h1 class="headerSection">Edytuj swoje dane</h1>
        </div>
      
       <form action="/Index/update" method="post">
       <input type="hidden" name="id" value=<?=$User[0]->id?> />
        <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label text-primary bg_info" >Imie </label>  
            <div class="col-sm-10">
              <input type="text" name="name"  class="form-control" required="required"  placeholder="Wpisz tu swoje Imie" onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->imie?> />
            </div>
        </div>

        <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label text-primary">Nazwisko </label>
            <div class="col-sm-10">
              <input type="text" name="surname" class="form-control" required="required" placeholder="Wpisz tu swoje Nazwisko" onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->nazwisko?> />
            </div>
        </div>

        <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label text-primary">Numer</label>
            <div class="col-sm-10">  
             <input type="text" name="number" class="form-control" required="required" placeholder="Wpisz tu swój numer telefonu" onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->nr_telefonu?> pattern="[0-9]*[0-9]{8}"/>
            </div>
        </div>
     
        <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label text-primary">Zawód</label>
            <div class="col-sm-10">  
             <input type="text" name="trade" class="form-control" required="required"  placeholder="Wpisz tu swój zawód"onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->zawod?> >
            </div>
        </div>
        
        <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label text-primary">Data</label>
            <div class="col-sm-10">  
             <input type="date" name="date" class="form-control" required="required" placeholder="Wpisz tu swoją date urodzenia" onkeyup="this.setAttribute('value', this.value);" value=<?=$User[0]->data_ur?> >
            </div>
        </div>
        
        <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label text-primary">Email</label>
            <div class="col-sm-10">  
             <input type="email" name="email" class="form-control" required="required" placeholder="Wpisz tu swój Email" value=<?=$User[0]->email?> >
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
          <div class="col-sm-11">  
            <input id="submit" type="submit" value="Wyślij" class="btn btn-primary w-25"/>
           </form>
          </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-1">  </div>
          <div class="col-sm-11">  
           <form action="delete" method="post">
	         <input type="hidden" name="id" value="<?php echo $User[0] -> id ; ?>" />
           <input type="submit" class="btn btn-danger w-25" name="usun" value="usun" />
           </form>
          </div>
       </div>
     </div>
   </div>
   <div class="STOPKA"> </div>
 </body>
</html>