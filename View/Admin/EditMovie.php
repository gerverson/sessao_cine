<?php
session_start();

include_once "../../Controler/Access.php";
$acesso = new Access();
$acesso->Acess_admin();
		
    include_once "../../Model/Movie.php";
		$movie = new Movie();
		
		
		
		if (isset($_POST['ok'])){
			$movie->setNome($_POST['nome']);
			$movie->setGenero($_POST['genero']);
			$movie->setClassificacao($_POST['classificacao']);
			$movie->setSinopse($_POST['comment']);
			$movie->setId($_GET['id']);
			$movie->update_movie();
		}
	$filme = $movie->buscar_movie($_GET['id']);	
?>
<?
//Cabecario
include_once "../Layout/Header.php";
?>


<div class="row">
        <div  style="text-align: center;" class="col-md-offset-4 col-md-4">
        	<img class="card-img-top" src="../../Upload/<? echo $filme['imagem']; ?>" width="200" height="250" alt="logo-evento">
<form method="POST" class="form-group" action="" enctype="multipart/form-data">
	<label class="control-label" for="signupName">Nome do Filme:</label>
	<input id="nome" name="nome" type="text"  value="<? echo $filme['nome']; ?>" maxlength="50" class="form-control"><br>
	<select name="genero" id="genero" class="form-control">
			<? 
			foreach ($movie->geGenero() as $genero){
        echo '<option value="'.$genero['id'].'">'.$genero['genero'].'</option>';
			}
			?>
	</select>
	<br>
		<select name="classificacao" id="classificacao" class="form-control">
			<? 
			foreach ($movie->geClassificacao() as $classe){
        echo '<option value="'.$classe['id'].'">'.$classe['classificacao'].'</option>';
			}
			?>
			<br>
			<label for="comment">Sinópse:</label>
			<textarea class="form-control" name="comment" rows="5" id="comment"><? echo $filme['sinopse']; ?></textarea><br>
			<button id="signupSubmit" type="submit" name="ok" class="btn btn-info btn-block">Atualizar Filme</button>
	</select>
</form>
</div>
</div>