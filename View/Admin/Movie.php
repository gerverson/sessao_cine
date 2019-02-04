<?php
session_start();

include_once "../../Controler/Access.php";
$acesso = new Access();
$acesso->Acess_admin();

    include_once "../../Model/Movie.php";
    include_once "../../Model/Session.php";
    
		$movie = new Movie();
		$sessao = new Session();
		
		$filme = $movie->buscar_movie($_GET['id']);
		
		if(isset($_GET['sessao'])){
			$sessao->encerrar_sessao($_GET['sessao']);
		}
		
		if (isset($_POST['ok'])){
				$sessao->setFilmeID($_POST['idfilme']);
				$sessao->setValor($_POST['valor']);
				$sessao->setData(date('d/m/Y', strtotime($_POST['data'])));
				$sessao->setInicio($_POST['inicio']);
				$sessao->setTermino($_POST['termino']);
				$sessao->setAtdAcentos($_POST['qtd']);
				$sessao->setSala($_POST['sala']);
				$sessao->register_session();
		}
?>

<?
//Cabecario
include_once "../Layout/Header.php";
?>



<br>
      	<div class="col-md-offset-3 col-md-3">
          <div class="card">
            <img class="card-img-top" src="../../Upload/<? echo $filme['imagem']; ?>" width="200" height="250" alt="logo-evento" align ="right">
          </div>
          </div>
          <div>
              <div class="card-body" align="left">
              <h3 class="card-title" align="left"><? echo $filme['nome']; ?></h3>
              <h4 class="card-title">Genero: <? echo $filme['genero']; ?></h4>
              <h4 class="card-title">Classificação: <? echo $filme['classificacao']; ?></h4>
              <h4 class="card-title">Sinópse: <? echo $filme['sinopse']; ?></h4>
              <button type="button" onclick="window.location.href='EditMovie.php?id=<? echo $filme['id']; ?>'" class="btn btn-dark">Editar Filme</button>
            </div>
          </div>

<div class="clearfix"></div>
<br>
<form method="POST" action="">
		<input type="hidden" name="idfilme" value="<? echo $_GET['id'] ?>">
<table style="width:100%;text-align:center;" border="1" class="table">
  <tr>
    <th>Data</th>
    <th>Hora Inicio</th> 
    <th>Hora Termino</th>
    <th>Acentos Disponíveiss</th>
    <th>Sala</th>
    <th>Valor</th>
    <th>Ações</th>
 </tr>
<?
			foreach ($sessao->buscar_sessao($_GET['id']) as $secao){
				echo ' <tr>';
        echo '<td>'.$secao['data'].'</td>';
        echo '<td>'.$secao['inicio'].'</td>';
        echo '<td>'.$secao['termino'].'</td>';
         $qtd = $sessao->qtd_sessao($secao['id']);
        echo '<td>'.$qtd.'/'.$secao['qtd_acentos'].'</td>';
        echo '<td>'.$secao['sala'].'</td>';
        echo '<td>'.$secao['valor'].'</td>';
        if($secao['cancelar'] == '0'){
        echo '<td><a href="?id='.$_GET['id'].'&sessao='.$secao['id'].'" class="btn btn-primary">Encerrar</a></td>';
        } else{
        	echo '<td>Encerrado</td>';
        }
        echo '</tr>';
			}
?>
<tr>
	<td><input id="data" name="data" type="date"  class="form-control"></td>
	<td><input id="inicio" name="inicio" type="time"  class="form-control"></td>
	<td><input id="termino" name="termino" type="time" class="form-control"></td>
	<td><input id="qtd" name="qtd" type="number" class="form-control"></td>
	<td><input id="sala" name="sala" type="number" class="form-control"></td>
	<td><input id="valor" name="valor" type="number" step="0.01" class="form-control"></td>
	<td><button type="submit" name="ok" class="btn btn-info btn-block">Registrar sessão</button></td>
	</tr>
	</table>
</form>