<?php

class Session{
    private $id;
    private $filmeID;
    private $valor;
    private $data;
    private $inicio;
    private $termino;
    private $atdAcentos;
    private $sala;
    private $cancelar;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getFilmeID(){
        return $this->filmeID;
    }

    public function setFilmeID($filmeID){
        $this->filmeID = $filmeID;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getInicio(){
        return $this->inicio;
    }

    public function setInicio($inicio){
        $this->inicio = $inicio;
    }

    public function getTermino(){
        return $this->termino;
    }

    public function setTermino($termino){
        $this->termino = $termino;
    }

    public function getAtdAcentos()
    {
        return $this->atdAcentos;
    }

    public function setAtdAcentos($atdAcentos){
        $this->atdAcentos = $atdAcentos;
    }

    public function getSala(){
        return $this->sala;
    }

    public function setSala($sala){
        $this->sala = $sala;
    }

    public function getCancelar(){
        return $this->cancelar;
    }

    public function setCancelar($cancelar){
        $this->cancelar = $cancelar;
    }
    
    public function register_session(){
         require_once "Database.php";
     	   $con = new Database();
         $conecta = $con->conectar();
        $sql = "insert into sessao_session(filme_id, data, valor, inicio, termino, sala, qtd_acentos, cancelar) values($this->filmeID, '$this->data', '$this->valor', '$this->inicio', '$this->termino', $this->sala, $this->atdAcentos, 0)";

        $query = mysqli_query($conecta, $sql);

        if($query){
            echo '<div class="alert alert-success"> <strong>Successo!</strong> Nova Sessão registrada.</div>';
        }else{
            echo'<div class="alert alert-danger"><strong>Erro!</strong> Houve algum erro no registro da sessão</div>';
        }
    }
    
      public function buscar_sessao($id){
        // echo "oi".$id;
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select * from sessao_session where filme_id=$id";

        $query = mysqli_query($conecta, $sql);

        $lista = array();

        while ($genre = mysqli_fetch_array($query)){
            array_push($lista,$genre);
        }
         return $lista;
      // print_r($lista); 
     }
     
     function encerrar_sessao($id){
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "update sessao_session set cancelar=1 where id=$id";
        $query = mysqli_query($conecta, $sql);

        if($query){
             echo '<div class="alert alert-success"> <strong>Successo!</strong> A sessão foi encerrada</div>';
        }else{
            echo'<div class="alert alert-danger"><strong>Erro!</strong> Não foi possível encerrar a sessão</div>';
        }
    }
    
         function comprar_sessao($sessaoID){
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();
        
        $userID = $_SESSION['usuarioID'];
        
         $sql = "insert into sessao_user_session(idsessao, iduser) values ($sessaoID,$userID)";
         $query = mysqli_query($conecta, $sql);

         if($query){
            echo '<div class="alert alert-success"> <strong>Successo!</strong> Você comprou a um ingresso para a sessão</div>';
         }else{
            echo'<div class="alert alert-danger"><strong>Erro!</strong> Não foi possível concluir a compra do ingresso</div>';
        }
        
    
    }

        function qtd_sessao($id){
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select count(idsessao) as qtd from sessao_user_session where idsessao=$id";
        $query = mysqli_query($conecta, $sql);
      //  return mysqli_fetch_assoc($query);
      $qtd = mysqli_fetch_assoc($query);
      return $qtd['qtd'];
    }
    
         public function buscar_sessoes_user($id){
        // echo "oi".$id;
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select * from sessao_user_session as us inner join sessao_session as s on us.idsessao = s.id inner join sessao_movie as m on s.filme_id = m.id where us.iduser = $id";

        $query = mysqli_query($conecta, $sql);

        $lista = array();

        while ($genre = mysqli_fetch_array($query)){
            array_push($lista,$genre);
        }
         return $lista;
      // print_r($lista); 
     }
    
    
}