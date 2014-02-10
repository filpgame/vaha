<?php
include ("./logado/includes/banco.php");
    
    
    if(isset($_REQUEST["email"])){
        $email = $_REQUEST["email"];
        $result = mysqli_query($conn,"SELECT * FROM usuario WHERE email =  '$email'");
        
        if($result){
            if(mysqli_num_rows($result) == 1){
                echo "false";
            }else{
                echo "true";
            }
        }
    }else if(isset($_REQUEST["usuario"])){
        $usuario = $_REQUEST["usuario"];
        $result = mysqli_query($conn,"SELECT * FROM usuario WHERE usuario =  '$usuario'");
        
        if($result){
            if(mysqli_num_rows($result) == 1){
                echo "false";
            }else{
                echo "true";
            }
        }
    }
    






