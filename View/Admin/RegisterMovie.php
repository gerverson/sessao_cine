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
					if (isset($_FILES['foto'])){
    					// echo 'Selecione uma imagem';
    					$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
    					$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    					$diretorio = "../../Upload/"; //define o diretorio para onde enviaremos o arquivo
    					move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);
    					$movie->setImagem($novo_nome);
					}
			$movie->register_movie();
		}
		
?>
<?
//Cabecario
include_once "../Layout/Header.php";
?>


<div class="row">
        <div  style="text-align: center;" class="col-md-offset-4 col-md-4">
<form method="POST" class="form-group" action="" enctype="multipart/form-data">
	<label class="control-label" for="signupName">Nome do Filme:</label>
	<input id="nome" name="nome" type="text" maxlength="50" class="form-control"><br>
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
			Imagem
			<label class="control-label" for="foto">Imagem de Cartaz:</label>
			<br>
			
			<input id="foto" name="foto" type="file" class="form-control" title = "Choose a video please">
			<br>
			<label for="comment">Sinópse:</label>
			<textarea class="form-control" name="comment" rows="5" id="comment"></textarea><br>
			<button id="signupSubmit" type="submit" name="ok" class="btn btn-info btn-block">Registrar Filme</button>
	</select>
</form>
</div>
</div>