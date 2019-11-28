<!--style type="text/css">
	table td{
		line-height: 40px;

    	border-bottom: 2px solid #fff;
  		border:1px solid red; 
	}
</style--->
<?include_once('con.php');?>

<?php
	$sql = "SELECT * FROM PRODUTOS";
	$result = mysqli_query($con,$sql) or die ('Falha na conexão'.mysqli_error($con));
	//echo "certo";

	if (mysqli_num_rows($result)>0) {

		
		while ($row = mysqli_fetch_assoc($result)) {
				$descricao = $row['DESCRICAO'];
                $codProduto = $row['CODPRODUTO'];
                $codBarras = $row['CODBARRAS'];
                $unidades = $row['NUNIDADES'];                
                $precoCusto = $row['PRECOCUSTO'];
                $precoVenda = $row['PRECOVENDA'];?>

                <table>
                	<td ><a href="#" title="Atualizar Produto"><?echo $descricao;?></a></td>
                	<td><?echo $codProduto;?></td>
                	<td><?echo $codBarras ;?></td>
                	<td><?echo $unidades ;?></td>
                	<td><?echo $precoCusto;?></td>
                	<td><?echo $precoVenda;?></td>

				</table>

		<?}

	};
	mysqli_close($con);
	
?>	
