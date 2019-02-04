<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>SESSÃO CINE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SESSÃO CINE</a>
    </div>
     <ul class="nav navbar-nav">
      <li class="active"><a href="#">HOME</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php 
    session_start();
    if(!(isset($_SESSION['logado']))){
      echo "<li><a href=\"View/Auth/Register.php\"><span class=\"glyphicon glyphicon-user\"></span>Registrar</a></li>
      <li><a href=\"View/Auth/Login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>Entrar</a></li>";
    }
    else{
      echo "<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>".$_SESSION['usuarioNome']."</a></li>
      <li><a href=\"View/Auth/Logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> Sair</a></li>";
    }
     ?>
      
    </ul>
  </div>
</nav>


  <div class="col-md-6">
<div class="container">
  <h2>Programação em Destaque</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 600px; height:400px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

    	<?php 
    	require_once "Model/Movie.php";
       
       $movie = new Movie();

        $cont = 0; $atv = '<div class="item active">'; $noAtv = '<div class="item">';
        foreach ($movie->listar_movie_carossel() as $row){
        	if($cont == 0){
        		echo '<div class="item active">'; $cont = 1;
        	}
        	else{
        		echo '<div class="item">';
        	}
        	echo '<img src="Upload/'.$row['imagem'].'"style="background-repeat: no-repeat; background-size: contain; width: 600px; height: 400px;" class="img-rounded">
      			 <div class="carousel-caption">
        		  <h3>L'.$row['nome'].'</h3>
        		 <p>'.$row['data'].'&nbsp;&nbsp;&nbsp;'.$row['inicio'].'</p>
      			 </div>
    		  </div>';
        }
?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

 <div class="col-md-6">
 	<br><br>
 	<h3>Sobre nós</h3>

 	<p>É estranho pensar que quando o som foi implantado aos filmes, em 1927 com o clássico O Cantor de Jazz, dividiu opiniões por todos os bastidores do mundo do cinema. O que parecia ser um retrocesso na linguagem, já que pensava-se que ele poderia tirar a poética da construção da imagem, hoje tornou-se indispensável em uma boa produção. Cineastas importantes demoraram a se render ao novo recurso. Charles Chaplin, por exemplo, demorou anos para fazer seu personagem falar. Somente em 1936, em Tempos Modernos, Chaplin deu o tom de sua voz, e mesmo assim cantando. Quando abriu a boca para falar de verdade, em 1940 com O Grande Ditador, fez um emocionante discurso e provou que ele próprio estava errado ao negar a evolução.</p>
 	<p>De lá para cá, o som não só passou a ser uma forma de se contar a história - através de diálogos e narração - como também passou a ser utilizado de modo cada vez mais inteligente nos filmes. Um exemplo? A música passou a fazer parte do clima direto na história, influenciando ou realçando os sentimentos que desejam ser passados. Um romance, por exemplo, como Casablanca ou ...E o vento levou, fica impossível imaginar o filme com a mesma cara sem as famosas trilhas sonoras ao fundo. Em Psicose, Hitchcock montou uma das cenas mais famosas da história com um tom de poesia macabra na cena do chuveiro. A cada facada que é desferida contra a personagem de Janet Leigh, há um sinc direto com a música criada por Bernard Herrmann e um corte no plano do filme. Simplesmente genial.</p>
</div>