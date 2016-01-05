<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    include 'includes/banco.php';

    $comboBox = $_GET['comboResposta'];

    $query = 'SELECT nome FROM comp_pc';

    mysql_query($query);

    while ($row = mysql_fetch_array($query)) {
        $comboBox = $row['nome'];
        echo "$row";
    }
