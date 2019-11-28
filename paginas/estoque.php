<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/formularios.css">
    <link rel="stylesheet" href="../css/btn.css">
    <link rel="stylesheet" href="../css/topo.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/table.css">

    
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">


    <title>SIMPLE STOCK</title>
</head>
<body>
<header class="topo">
            <div class="logo">

            </div>
            <div class="title-pag">
                <h2>Estoque</h2>
            </div>
            <div class="credenciail">
                <ul>
                    <li>
                        <a href="#">Usuario Sobrenome</a>
                    </li>
                    <span>|</span>
                    <li>
                        <a href="#"> Sair</a>
                    </li>
                </ul>
            </div>
        </header>
    <header id="menu" >
        
        <nav>
            <ul>
                <li ><a href="../index.php">PAGINA INICIAL</a></li>
                <li class=""><a href="caixa.php">CAIXA</a></li>
                <li ><a href="nova-venda.php">NOVA VENDA</a></li>
                <li class="active"><a href="estoque.php">ESTOQUE</a></li>
                <li  ><a href="novo-produto.php">NOVO PRODUTO</a></li>
                <li><a href="clientes.php">CLIENTES</a></li>
                <li  ><a href="novo-cliente.php">NOVO CLIENTE</a></li>
            </ul>
        </nav>
    </header>
        <div id="main">
            <table>
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Code. Produto</th>
                        <th>Code. de Barras</th>
                        <th>Unidades</th>
                        <th>Preço de custo</th>
                        <th>Preço de Venda</th>
                    </tr>
                </thead>
            <?php
                include_once('../database/select-estoque.php');
                ?>
        </div>

    <footer>
        <p>Copytight SimpleStock &copy 2019 Desenvolvido por <a 
            href="https://www.quevemcosta.com" target="_blank" >QuevemCosta</a>
        </<p>
    </footer>
        <script src="../js/main.js"></script>
        <script src="../js/forms.js"></script>
</body>
</html>