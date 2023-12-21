<!DOCTYPE html>
<html lang="en">
<head>
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
        <a class="nav-link" href="index.php"desabled>Voltar</a>
    </div>
  </div>
</nav>
<br><br><br>
<main>
    <center>
    <h1>Temperatura</h1><br><br><br><br></center><br><br><br><br><br><br>
</head>
<body>
    <center>
<?php
$temperatura=$_POST["temperatura"]; 
echo "<br><h4><b>A temperatura é: </b>$temperatura ";

if($temperatura < 0){
    echo "Congelante";
    }
    
else if ($temperatura >= 0 && $temperatura < 15){
    echo "Muito frio";
    }
    
else if ($temperatura >= 15 && $temperatura < 25){
    echo "Razoável";
    }
    
else if ($temperatura >= 25){
    echo "Calor";
    }
    
    ?>
    </center>
</body>
        


</html>
