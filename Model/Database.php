<?php 
class Database{
	private $servidor;
	private $usuario;
	private $senha;
	private $banco;

	function __construct(){
		$this->servidor = "localhost";
		$this->usuario = "sistem70_maninha";
		$this->senha = "sistemas123";
		$this->banco = "sistem70_maninha";
	}

	function conectar(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->banco);
	//	echo "Conectado";
		//Funcção para conversão da coleção de dados entre DB e Aplicação
		mysqli_set_charset($conexao, 'utf-8');

		if(mysqli_connect_errno()){
		 //   echo '<link rel="stylesheet" href="../template/alerta.css">';
		//	echo'<div class="alerta error">Erro ao conectar o Banco de Dados.</div>';
			echo"Erro ao conectar o Banco de Dados.".mysqli_connect_error();
		}
		return $conexao;

	}

}