<?php
session_start();
    include_once "../../Model/Movie.php";
		$movie = new Movie();
		// $movie->listar_movie();
include_once "../../Controler/Access.php";
$acesso = new Access();
$acesso->Acess_user();		
?>

<?
//Cabecario
include_once "../Layout/Header.php";
?>

<?
        foreach($movie->listar_movie_user() as $row){
        	echo '<div class="col-md-3">
          <div class="card" style="width:auto" align="center">
            <img class="card-img-top" src="../../Upload/'.$row["imagem"].'" width="130" height="200" alt="logo-evento">
            <div class="card-body">
              <h5 class="card-title">'.$row["nome"].'</h5>
              <button type="button" onclick="window.location.href=\'Movie.php?id='.$row["filme_id"].'\'" class="btn btn-primary">Ver Filme</button>
            </div>
          </div>
        </div>';
        }
?>