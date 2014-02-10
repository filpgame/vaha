<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ("./logado/includes/banco.php");
    $email = "";
    
    $result = mysqli_query($conn,"SELECT * FROM usuario WHERE email =  '$email'");
    
    if($result){
        if(mysqli_num_rows($result == 1)){
            echo "false";
        }else{
            echo "true";
        }
    }






