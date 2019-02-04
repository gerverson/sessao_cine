<?php
session_start();
    include_once "../../Model/Authentication.php";
		$auth = new Authentication();
	//	$listas = $auth->listar_users();


include_once "../../Controler/Access.php";
$acesso = new Access();
$acesso->Acess_admin();
		
?>
<?
//Cabecario
include_once "../Layout/Header.php";
?>



<table style="width:100%;text-align:center;" border="1" class="table">
	<tr>
	<th>Nome</th>	
	<th>E-mail</th>
	</tr>
<?

foreach ($auth->listar_users() as $lista){
	echo "<tr>";
	echo "<td>".$lista['nome']."</td>";
	echo "<td>".$lista['email']."</td>";
	echo "</tr>";
}

?>

</table>