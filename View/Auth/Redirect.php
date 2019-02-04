<?php
// require_once "../../Controler/Register.php";
// $Register = new Register();
// $Register->Register_User();
include_once "../../Model/Authentication.php";
		 $auth = new Authentication();
		 $auth->setNome($_POST['nome']);
		 $auth->setEmal($_POST['email']);
		 $auth->setSenha($_POST['senha']);
		 $auth->register_user();
echo "oi";

