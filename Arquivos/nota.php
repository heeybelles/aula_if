
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ProjectPHP</title>
    <link rel="stylesheet" href="#">
</head>
<body>
    
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" ><b>ProjectPHP</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index.php">Atividade1<span class="sr-only" ></span></a>
       <a class="nav-link active" href="peso.php">Atividade 2 <span class="sr-only"></span></a>
        <a class="nav-link active" href="nota.php">Atividade 3 <span class="sr-only"active></span></a>
        <a class="nav-link" href="login.php"desabled>Voltar</a>
    </div>
  </div>
</nav>
<br><br><br>
<main>
<center>
<br><br><br>
<br><br><br>
<h3>Informe os dados solicitados abaixo:</h3>
<div class="Form1" id="#ativ3" >
        <fieldset>
        <form name="Notas" method="post" action="NotaResult.php">
           <label>Nome:</label>
           <input type="text" name="nome" required></input><br><br>
           <div class="inputnota">
           <label>1°nota:</label>
           <inpuT type="number" name="nota1" required></input><br><br>
           <label>2°nota:</label>
           <inpuT type="number" name="nota2" required></input><br><br>
           <label>3°nota:</label>
           <inpuT type="number" name="nota3" required></input><br><br>
</div>
             <a href="NotaResult.php"> <input type="submit" class="btnAcessar1"  value="Enviar"></input></a>
        </fieldset>
    </div>
</center>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
<style>
    input{
        
        outline:none;
    }
</style>