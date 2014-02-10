<?php
include ("./logado/includes/banco.php");

	$email = $_REQUEST["email"]; 
    
    $result = mysqli_query($conn,"SELECT * FROM usuario WHERE email =  '$email'");
    
    if($result){
        if(mysqli_num_rows($result) == 1){
            echo "false";
        }else{
            echo "true";
        }
    }






