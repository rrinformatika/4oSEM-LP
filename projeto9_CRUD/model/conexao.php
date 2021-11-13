<?php

    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'projeto9');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
		echo "conexao ok";     
		return $conn ;
		
    }
    

    


}
