<?php
session_start();
include_once "../../Model/Session.php";
		$sessao = new Session();


include_once "../../Controler/Access.php";
$acesso = new Access();
$acesso->Acess_user();
?>

<?
//Cabecario
include_once "../Layout/Header.php";
?>




<table style="width:100%;text-align:center;" border="1" class="table">
	<tr>
		<th>Nome do Filme</th>
		<th>Data</th>
		<th>Hora inicio</th>
		<th>Hora de termino</th>
		<th>Sala</th>
		<th>Ingresso</th>
	</tr>
<?
foreach ($sessao->buscar_sessoes_user($_SESSION['usuarioID']) as $lista){
	echo "<tr>";
	echo '<td><a href="Movie.php?id='.$lista['filme_id'].'">'.$lista['nome'].'</a></td>';
	echo "<td>".$lista['data']."</td>";
	echo "<td>".$lista['inicio']."</td>";
	echo "<td>".$lista['termino']."</td>";
	echo "<td>".$lista['sala']."</td>";
	echo '<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">gerar Ingresso</button></td>';
	echo "</tr>";
}


?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</table>


<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Seu Ingresso</h4>
      </div>
      <div class="modal-body" style="text-align:center">
        <p>Apresente o QR CODE na entrada do filme.</p>
        <img class="card-img-top" src="../../Upload/qr.png" width="200" height="250" alt="qrcode" align ="center">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
