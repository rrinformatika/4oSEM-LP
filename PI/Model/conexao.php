<?php


    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'projeto_logar');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
    }
    

    
}
