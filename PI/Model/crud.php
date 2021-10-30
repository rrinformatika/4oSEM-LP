<?php

require "conexao.php";

 session_start(); 

class crud {    

 function inserir_Usuario($email,$senha){
 

   $conn= conectar();   

   $pegaEmail = mysqli_query($conn, "SELECT * FROM logar WHERE email = '$email'");	
	
	if(mysqli_num_rows($pegaEmail) ==1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('Email já existe');window.location.href='../View/frm_cadastro.html';</script>";
	

   }else{

   $sql = "INSERT INTO logar (email,senha) values('$email','$senha')";

    mysqli_query($conn,$sql);   

    echo"<script language='javascript' type='text/javascript'>alert('Usuário Cadastrado com sucesso');window.location.href='../View/frm_logar.html';</script>";

   }
  
}
  
   function selecionar_Usuario($email,$senha){
       
   
        $conn= conectar();  
 
        $result_usuario = "SELECT * FROM logar  WHERE email= '$email' && senha = '$senha' LIMIT 1";
        
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
  
  function inserir_Livro($titulo_trecho,$trecho){ 

    $conn= conectar();   
 
    $sql = "INSERT INTO livro (titulo_trecho,trecho) values('$titulo_trecho','$trecho')";
 
     mysqli_query($conn,$sql);   

     echo"<script language='javascript' type='text/javascript'>alert('Trecho Cadastrado com sucesso');window.location.href='../View/frm_livro.php';</script>";
 
   }

   

   public function excluir_Livro ($codigo_trecho){

    $conn= conectar();   
    
    $cod_livro= mysqli_query($conn, "SELECT * FROM livro WHERE cod_trecho = '$codigo_trecho'");	
    
    if(mysqli_num_rows($cod_livro) == 0){
              
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir');window.location.href='../View/frm_excluir.php';</script>";
    }
           else{	
    
                  $result_livro = "DELETE FROM livro WHERE cod_trecho = '$codigo_trecho'";
                  
                  mysqli_query($conn, $result_livro);
      
      if(mysqli_affected_rows($conn) != 0){
          
        echo"<script language='javascript' type='text/javascript'>alert('Excluído com sucesso');window.location.href='../View/frm_excluir.php';</script>";
                     
              }else{
                  
                  header("Location:../view/frm_excluir.php");
                   
                  
              }
    }
  
    
   }


   public function alterar_livro($cod_trecho, $titulo_trecho,$trecho){

    $conn= conectar(); 
    
  	$pegacod_trecho = mysqli_query($conn, "SELECT * FROM livro WHERE cod_trecho = '$cod_trecho'");

         if(mysqli_num_rows($pegacod_trecho) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este Código NÃO esta cadastrado em nossos registros');window.location.href='../View/frm_alterar.php'</script>";

	      }else{		

		
          $result_livro = "UPDATE livro SET titulo_trecho = '$titulo_trecho', trecho = '$trecho' WHERE cod_trecho = '$cod_trecho'";

         mysqli_query($conn,$result_livro);

             if(mysqli_affected_rows($conn) != 0){
            echo "

                 <script language='javascript' type='text/javascript'>alert('Trecho do Livro alterado com sucesso!');window.location.href='../View/frm_livro.php'</script>";
                 
            
             }else{
                  echo " 
                   <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este trecho');window.location.href='../View/frm_alterar.php'</script>";
                     
                  
                     
              }


        }




   }
  }

  


