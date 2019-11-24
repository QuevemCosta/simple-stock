<?php
    //0 ID do produto deve ser o codgo de produto
    echo '<pre>';
    print_r($_POST);

   $descricao = strtoupper($_POST['descricao']);
   $cod_produto = $_POST['cod_produto'];  
   $cod_barras = $_POST['cod_barras'];
   $unidades = $_POST['unidades'];
   $preco_custo = ($_POST['preco_custo']);
   $preco_cvenda = $_POST['preco_venda'];


   echo($descricao);
   echo'<br>';
   echo($preco_custo);

?>