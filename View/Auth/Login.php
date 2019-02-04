<?php
session_start();

include_once "../../Controler/Access.php";
$acesso = new Access();
$acesso->Acess_login();

if (isset($_POST['ok'])){
    include_once "../../Model/Authentication.php";
	$auth = new Authentication();
    $auth->setEmal($_POST['login']);
    $auth->setSenha($_POST['senha']);
    $auth->login_user();
}
?>

<?
//Cabecario
include_once "../Layout/Header.php";
?>



<br>
<h3 align="center"> ENTRE NO SISTEMA</h3>
<br>
    <div  style="text-align: center;" class="row col-md-offset-4 col-md-4">
            <form action="" method="POST" class="formulario">
                <div class="login">E-mail</div>
                <input type="text" name="login" class="form-control">
                <div class="senha">Telefone</div>
                <input type="password" name="senha" class="form-control"><br>
                <input type="submit" class="form-control btn btn-info btn-block" name="ok" value="Entrar" >
            </form>
    </div>