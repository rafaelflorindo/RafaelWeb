<?php
//rafael.florindo@docente.pr.senac.br
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
/*  $titulo = "Teste 3";
    $descricao = "Teste descrição 3";
  */  
    $dataCadastro = date("Y-m-d H:m:s");

    include("conexao.php");
    
    function inserir($titulo, $descricao, $dataCadastro, $conectar){

        $sql = "INSERT INTO projeto (titulo, descricao, dataCadastro) 
        VALUES ('".$titulo."', '".$descricao."', '".$dataCadastro."')";
    
        $result = $conectar->query($sql);
        
        if($result){
            return $conectar->insert_id;
        }else{
            return false;        
        }
    }
    
  /*$resultado = inserir($titulo, $descricao, $dataCadastro, $conectar);
  
  if($resultado){
    echo "O projeto com $titulo, 
    foi gravado com o código $resultado";
  }else{
    echo "O projeto $titulo não foi gravado";
  }
  */
  
  function listarProjetos($conectar){
    $sql = "SELECT * FROM projeto order by titulo ASC";

    $retorno = $conectar->query($sql);

    $projetos = array();//array vazio
    
    while($linha = $retorno->fetch_assoc()){
      $projetos[]=$linha;
    }
    var_dump($projetos);
    //return $projetos;
  }

  listarProjetos($conectar);