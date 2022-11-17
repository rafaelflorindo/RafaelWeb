<?php
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
/*    $titulo = "Teste 3";
    $descricao = "Teste descrição 3";
  */  $dataCadastro = date("Y-m-d H:m:s");

    include("conexao.php");
    
    function inserir($titulo, $descricao, $dataCadastro, $conectar){

        $sql = "INSERT INTO projeto (titulo, descricao, dataCadastro) 
        VALUES ('".$titulo."', '".$descricao."', '".$dataCadastro."')";
    
        $result = $conectar->query($sql);
        
        if($result){
            return $conectar->insert_id;
            //return true;
        }else{
            return false;        
        }
    }
    
  $resultado = inserir($titulo, $descricao, $dataCadastro, $conectar);
  
  if($resultado){
    echo "O projeto com $titulo, 
    foi gravado com o código $resultado";
  }else{
    echo "O projeto $titulo não foi gravado";
  }