<?php
session_start();

include_once "../../Controler/Access.php";
$acesso = new Access();
$acesso->Acess_login();
?>

<?
//Cabecario
include_once "../Layout/Header.php";
?>

		<div class="row col-md-offset-4 col-md-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="Redirect.php" role="form">
						<div class="form-group">
							<h2>Registrar Usuário</h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Seu Nome:</label>
							<input id="nome" name="nome" type="text" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Seu E-mail:</label>
							<input id="email" name="email" type="email" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Sua Senha:</label>
							<input id="senha" name="senha" type="password" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<button id="signupSubmit" type="submit" class="btn btn-info btn-block">Registrar Me.</button>
						</div>
					</form>
				</div>
			</div>
		</div>