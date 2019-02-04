<?php
session_start();
    include_once "../../Model/Movie.php";
		$movie = new Movie();

include_once "../../Controler/Access.php";
$acesso = new Access();
$acesso->Acess_admin();
		
?>
<?
//Cabecario
include_once "../Layout/Header.php";
?>

<?
        foreach($movie->listar_movie() as $row){
        	echo '<div class="col-md-3">
          <div class="card" style="width:auto" align="center">
            <img class="card-img-top" src="../../Upload/'.$row["imagem"].'" width="130" height="200" alt="logo-evento">
            <div class="card-body">
              <h5 class="card-title">'.$row["nome"].'</h5>
              <button type="button" onclick="window.location.href=\'Movie.php?id='.$row["id"].'\'" class="btn btn-primary">Ver Filme</button>
            </div>
          </div>
        </div>';
        }
?>

        <div class="col-md-3">
          <div class="card" style="width:auto" align="center">
            <div class="card-img-top" style="background-color: white;display:inline-block;width: 130px;height: 200px;text-align: center;" alt="logo-evento">
            	<span style="font-size: 140px" class="glyphicon glyphicon-plus"></span>
            </div>
            <div class="card-body">
              <h5 class="card-title">&nbsp;&nbsp;&nbsp;</h5>
              <button onclick="window.location.href='RegisterMovie.php'" class="btn btn-primary">Novo Filme</button>
            </div>
          </div>
        </div>