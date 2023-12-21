
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Recuperando dados - Login</title>

</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" ><b>ProjectPHP</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index.php">Ínicio <span class="sr-only"></span></a>
      <a class="nav-link" href="nota.php">Voltar</a>
    </div>
  </div>
</nav>

<br><br><br>
<main>
  <center>

<fieldset>
<?php

$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
echo "<br><h2>Calculando a média:<h2>";
$media=($nota1+$nota2+$nota3)/3;

 
echo "<br><h4><b>Nome:</b> $nome </h4><br>";
echo "<h4><b>1°nota:</b> $nota1 </h4><br>";
echo "<h4><b>2°nota:</b> $nota2 </h4><br>";
echo "<h4><b>3°nota:</b> $nota3 </h4><br>";
echo "<h4><b>A média é:</b>  $media</h4><br>";
if($media >=7){
    echo "<h5>Aluno Aprovado!</h5>";
}
else{
    echo"<h5>Aluno Reprovado!</h5>";
}
?>
 
</fieldset>
</center>
</main>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
<style>
*{
    margin:0;
    padding: 0%;
}

</style>
    
