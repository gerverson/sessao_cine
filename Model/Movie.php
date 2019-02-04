<?php

class Movie{
    private $id;
    private $nome;
    private $genero;
    private $classificacao;
    private $sinopse;
    private $imagem = null;
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getGenero(){
        return $this->genero;
    }
    
    public function setGenero($genero){
        $this->genero = $genero;
    }
    
    public function getClassificacao(){
        return $this->classificacao;
    }
    
    public function setClassificacao($classificacao){
        $this->classificacao = $classificacao;
    }
    
    public function getSinopse(){
        return $this->sinopse;
    }
    
    public function setSinopse($sinopse){
        $this->sinopse = $sinopse;
    }
    
    public function getImagem(){
        return $this->imagem;
    }
    
    public function setImagem($imagem){
        $this->imagem = $imagem;
    }
    
    public function RegisterMovie(){
    	echo "oi";
    }
    
    public function geGenero(){
        // echo "oi";
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select * from sessao_genre";

        $query = mysqli_query($conecta, $sql);

        $lista = array();

        while ($genre = mysqli_fetch_array($query)){
            array_push($lista,$genre);
        }
       return $lista;
    //   print_r($lista);
    }
	
	    public function geClassificacao(){
        // echo "oi";
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select * from sessao_ranking";

        $query = mysqli_query($conecta, $sql);

        $lista = array();

        while ($genre = mysqli_fetch_array($query)){
            array_push($lista,$genre);
        }
       return $lista;
    //   print_r($lista);
    }
    
        public function register_movie(){
         require_once "Database.php";
     	 $con = new Database();
         $conecta = $con->conectar();
         $sql = "insert into sessao_movie(nome, genero,classificacao,sinopse,imagem) values ('$this->nome', $this->genero,$this->classificacao,'$this->sinopse','$this->imagem')";

        $query = mysqli_query($conecta, $sql);

        if($query){
            echo '<div class="alert alert-success"> <strong>Successo!</strong> O filme foi registrado</div>';
        }else{
          //  echo '<link rel="stylesheet" href="../template/alerta.css">';
            echo'<div class="alert alert-danger"><strong>Erro!</strong> Houve algum erro no registro do filme</div>';
        }
    }
    
    
    public function update_movie(){
         require_once "Database.php";
     	 $con = new Database();
         $conecta = $con->conectar();
        //  $sql = "insert into sessao_movie(nome, genero,classificacao,sinopse,imagem) values ('$this->nome', $this->genero,$this->classificacao,'$this->sinopse','$this->imagem')";

         $sql = "update sessao_movie set nome='$this->nome', genero=$this->genero, classificacao=$this->classificacao, sinopse='$this->sinopse' where id=$this->id";

        $query = mysqli_query($conecta, $sql);

        if($query){
            echo '<div class="alert alert-success"> <strong>Successo!</strong> O filme foi atualizado</div>';
        }else{
          //  echo '<link rel="stylesheet" href="../template/alerta.css">';
            echo'<div class="alert alert-danger"><strong>Erro!</strong> Houve algum erro no registro do filme</div>';
        }
    }
    
    public function listar_movie(){
     //   echo "oi";
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select m.nome, m.id, m.sinopse, m.imagem, g.genero, c.classificacao from sessao_movie as m inner join sessao_genre as g on m.genero = g.id inner join sessao_ranking as c on m.classificacao = c.id";

        $query = mysqli_query($conecta, $sql);

        $lista = array();

        while ($genre = mysqli_fetch_array($query)){
            array_push($lista,$genre);
        }
      return $lista;
    //  print_r($lista); 
    }
    
     public function listar_movie_user(){
     //   echo "oi";
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select distinct s.filme_id, m.nome, m.imagem from sessao_session as s inner join  sessao_movie as m on m.id = s.filme_id where s.cancelar = 0";

        $query = mysqli_query($conecta, $sql);

        $lista = array();

        while ($genre = mysqli_fetch_array($query)){
            array_push($lista,$genre);
        }
      return $lista;
    //  print_r($lista); 
    }
    
    
    
        function buscar_movie($id){
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select m.nome, m.id, m.sinopse, m.imagem, g.genero, c.classificacao from sessao_movie as m inner join sessao_genre as g on m.genero = g.id inner join sessao_ranking as c on m.classificacao = c.id where m.id =$id";
        $query = mysqli_query($conecta, $sql);
        return mysqli_fetch_assoc($query);
        // print_r($query);
    }
    
        public function listar_movie_carossel(){
        require_once "Database.php";
        $con = new Database();
        $conecta = $con->conectar();

        $sql = "select DISTINCT m.id, m.nome, m.imagem, s.inicio, s.data from sessao_session as s inner join sessao_movie as m on s.filme_id = m.id group by s.filme_id ORDER BY RAND() LIMIT 3";

        $query = mysqli_query($conecta, $sql);

        $lista = array();

        while ($genre = mysqli_fetch_array($query)){
            array_push($lista,$genre);
        }
      return $lista;
    //   print_r($lista); 
    }
    
    
}