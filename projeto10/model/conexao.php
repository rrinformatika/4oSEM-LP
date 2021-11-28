<?php

    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'projeto10');
    
	if(!$conn){
           
		return "Conexão não abre !" ;
                
	}else{
		return $conn ;
    }

}
?>
