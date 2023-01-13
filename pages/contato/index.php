<?php

if (isset($_POST['submit'])) {

  include_once('./config/config.php');

  $email = $_POST['emailinput'];
  $nome = $_POST['nameinput'];

  $sql = "INSERT INTO form_contato(email, nome) values ('{$email}', '{$nome}' )";

  $resultado = $conexao->query($sql);

  /*
  $resultado = mysqli_query($conexao, "INSERT INTO form_contato(email, nome) values ('$email', '$nome' )");
  }
  */

  if ($resultado == true) {
    print "<script>alert('Usuário cadastrado com sucesso')</script>";
  }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Blog DMNN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="./index.css">

</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <div class="header-message">
        <h3>Clique aqui para baixar o app Dominnus, e alavancar os seus resultados.</h3>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DMNN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../blog/index.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../marketplace/index.php">Marketplace</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="form-title">
<h2>Nós queremos muito te ouvir.</h2>
<h5>Preencha o formulário e retornaremos até você no mais rápido possível. </h5>
</div>

<div class="form"> 



<form action="index.php" method="POST">
  <div class="mob-3">
    
    <label for="emailinput" class="form-label">Qual é o seu email?</label>
    
    <input type="email" class="form-control" id="emailinput" name="emailinput" aria-describedby="emailHelp" required>
    
    <div id="emailHelp" class="form-text">Não compartiharemos suas informações com ninguém.</div>
  
  </div>

  <br/>
  
  <div class="mb-3">
    
    <label for="exampleInputPassword1" class="form-label">Qual é o seu telefone?</label>
    
    <input type="text" class="form-control" id="nameinput" name="nameinput" required>
  
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="politica-check" required>
    <label class="form-check-label" for="exampleCheck1">Concordo com a política de privacidade</label>
    
  </div>
  <div class="mb-3 form-check">

  <input type="checkbox" class="form-check-input" id="termos-check" required>
  <label class="form-check-label" for="exampleCheck1">Concordo com os termos de uso.</label>

  </div>
  <input type="submit" name="submit" id="submit" class="submit-button"/>
</form>
</div>

</body>