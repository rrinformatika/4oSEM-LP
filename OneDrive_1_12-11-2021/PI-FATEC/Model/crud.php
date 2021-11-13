<?php

require "conexao.php";

 session_start(); 

class crud {  
    
    public $email;    
    public $nome;
    public $endereco;
    public $telefone;
    public $senha;
    
    public function setEmail($email)
     {
      $this->email = $email;
     }
 
    public function getEmail()
     {
      return $this->email;
    
     }
    public function setNome($nome)
     {
      $this->nome = $nome;
     }
 
    public function getNome()
     {
      return $this->nome;
    
     }
     public function setEndereco($endereco)
     {
      $this->endereco = $endereco;
     }
 
    public function getEndereco()
     {
      return $this->endereco;
    
     }
     public function setTelefone($telefone)
     {
      $this->telefone = $telefone;
     }
     
     public function getTelefone()
     {
      return $this->telefone;
    
     }
     public function setSenha($senha)
     {
      $this->senha = $senha;
     }
     
     public function getSenha()
     {
      return $this->senha;
    
     }
     

 function inserir_Usuario(){
     
    $conn= conectar();   
    
    $email= $this->getEmail();
    
    
    $pegaEmail = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '$email'");	
	
    if(mysqli_num_rows($pegaEmail) == 1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('Email já existe');window.location.href='../View/frm_cadastrar.html';</script>";
	

   }else{

  $sql = "INSERT INTO usuario (email,nome,endereco,telefone,senha) values('".$this->getEmail()."','".$this->getNome()."','".$this->getEndereco()."','".$this->getTelefone()."','".$this->getSenha()."')";

    mysqli_query($conn,$sql);   
    
    echo"<script language='javascript' type='text/javascript'>alert('Usuário Cadastrado com sucesso');window.location.href='../View/frm_logar.html';</script>";
   
   }
 }
   function selecionar_Usuario(){
       
   
        $conn= conectar();  
         $email= $this->getEmail();
         $senha= $this->getSenha();
 
        $result_usuario = "SELECT * FROM usuario  WHERE email= '$email' && senha = '$senha' LIMIT 1";
        
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
       
        if(isset($resultado)){
		
            $_SESSION['usuarioEmail'] = $resultado['email'];            		
            $_SESSION['usuarioSenha'] = $resultado['senha'];  

            header("Location: ../View/frm_perfil_usuario.php");           
   
        
        }else{            
       
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/frm_logar.html';</script>";
         
        }
    

  }
  
 


   }
  

  


