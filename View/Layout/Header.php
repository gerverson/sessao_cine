<!DOCTYPE html>
<html>
<head>
  <title>SESSÃO CINE</title>
<!-- BootStrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta charset="utf-8">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SESSÃO CINE</a>
    </div>
     <ul class="nav navbar-nav">
      <li class="active"><a href="../Admin/Home.php">HOME</a></li>
    </ul>
    <ul class="nav navbar-nav">
          <?php 
    if(isset($_SESSION['logado']) and $_SESSION['tipo'] == 1){
      echo '<li class="active"><a href="../Admin/Users.php">Usuários</a></li>';
    }
    elseif(isset($_SESSION['logado']) and $_SESSION['tipo'] == 2){
      echo '<li class="active"><a href="../User/MyMovie.php">Meus filmes</a></li>';
    }
     ?>
      </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php 
    if(!(isset($_SESSION['logado']))){
      echo "<li><a href=\"../Auth/Register.php\"><span class=\"glyphicon glyphicon-user\"></span>Registrar</a></li>
      <li><a href=\"../Auth/Login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>Entrar</a></li>";
    }
    else{
      echo "<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>".$_SESSION['usuarioNome']."</a></li>
      <li><a href=\"../Auth/Logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> Sair</a></li>";
    }
     ?>
      
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">