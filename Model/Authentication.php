<?php
Class Authentication{
		private $nome;
    private $emal;
    private $senha;
    private $tipo;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome): void{
        $this->nome = $nome;
    	
    }

    public function getEmal(){
        return $this->emal;
    }

    public function setEmal($emal): void{
        $this->emal = $emal;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha): void{
        $this->senha = $senha;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo): void{
        $this->tipo = $tipo;
    }
    
    
    public function register_user(){
         require_once "Database.php";
      //  echo var_dump(include_once "Database.php");
     	 $con = new Database();
         $conecta = $con->conectar();
// echo $this->nome;
         $sql = "insert into sessao_user(nome, email, senha, tipo) values('$this->nome', '$this->emal', md5('$this->senha'), 2)";

        $query = mysqli_query($conecta, $sql);

        if($query){
            echo '<div class="alert alert-success"> <strong>Successo!</strong> Você agora está registrado.</div>';
        }else{
          echo'<div class="alert alert-danger"><strong>Erro!</strong> Não foi possível concluir seu cadastro.</div>';
        }
    echo "oi2";
    }

    function login_user(){
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select * from sessao_user where email='$this->emal' and senha = md5('$this->senha')";
        $query = mysqli_query($conecta, $sql);
        $resultado = mysqli_fetch_assoc($query);
        if (empty($resultado)) {
            echo'<div class="alert alert-danger"><strong>Erro!</strong> Usuário ou senha incorretos</div>';
        } else {
            $_SESSION['tipo'] = $resultado['tipo'];
            $_SESSION['usuarioID'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['logado'] = true;
            echo "<script>location.href='../Admin/Home.php';</script>";
        }
    
    }
    
    public function listar_users(){
      //  echo "oi";
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select * from sessao_user where tipo = 2";

        $query = mysqli_query($conecta, $sql);

        $lista = array();

        while ($genre = mysqli_fetch_array($query)){
            array_push($lista,$genre);
        }
      return $lista;
   //  print_r($lista); 
    }

}