<?php 

echo '<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<title>PHP Post</title>
</head>';

$senha = $_POST['senha']; 
if(strlen($senha) < 8){
    echo '<div class="alert alert-danger" role="alert">
    A senha tem que ter 8 caracteres ao menos!
  </div>
  <a href="index.php" class="btn btn-primary">Voltar</a>';
}else{
    echo '<div class="alert alert-success" role="alert">
    Senha cadastrada com sucesso!
  </div><a href="index.php" class="btn btn-primary">Voltar</a>';
}


?>