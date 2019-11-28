<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $base = 'siplestock';

    $msgBase='Falha na coneção com a base dados. Verifique se o Mysql esta ativo';
    $con = mysqli_connect($host,$user,$pass) or die ($msgBase.mysqli_error());

    $msgTable = 'Falha de comunicação com a tabela de produtos na base de dados por favor chame o suporte';
    $base = mysqli_select_db($con,$base) or die($msgTable.mysqli_error());
    //echo 'Conectado a base de dados';
    
?>