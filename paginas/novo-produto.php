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
    
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">


    <title>SIMPLE STOCK</title>
</head>
<body>
<header class="topo">
            <div class="logo">

            </div>
            <div class="title-pag">
                <h2>Novo Produto</h2>
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
                <li ><a href="caixa.php">CAIXA</a></li>
                <li ><a href="nova-venda.php">NOVA VENDA</a></li>
                <li ><a href="estoque.php">ESTOQUE</a></li>
                <li class="active" ><a href="novo-produto.php">NOVO PRODUTO</a></li>
                <li><a href="clientes.php">CLIENTES</a></li>
                <li  ><a href="novo-cliente.php">NOVO CLIENTE</a></li>
            </ul>
        </nav>
    </header>
        <div id="main">
        <section>
            <form 
                id="form-produto" 
                method="post" 
                action="../con-base/perciste-produto.php" 
                autocomplete="off"    
            >
                <div class="inputs">
                    
                    <span>Descrição</span>
                    <input 
                        type="text" 
                        title="Nome ou descrição do produto" 
                        placeholder="Descrição do produto"
                        name="descricao"
                        id="desc-produto"
                        maxlength="100"
                        required
                    >

                    <span>Código do protuto</span>
                    <input 
                        type="number"
                        title="Código do produto"
                        placeholder="Código do produto"
                        name="cod_produto"
                        id="cod-produto"
                        maxlength="10"
                        required
                    >

                    <span>Código de Barras</span>
                    <input 
                        type="number"
                        title="Código de barras"
                        placeholder="Cócdigo de barras"
                        name="cod_barras"
                        id="cod-barras"
                        maxlength="13"
                        required
                    >
                </div>
                                
                <div class="valores">

                    <span>Nº de Unidades</span>
                    <input 
                        type="number"
                        title="Nº de unidades"
                        placeholder="Nª de unidades"
                        name="unidades"
                        id="cod-barras"
                        maxlength="10"
                        required     
                    >
                    <span>Preço de Custo</span>
                    <input 
                        type="text"
                        title="Preço de Custo"
                        placeholder="R$ por unidade"
                        name="preco_custo"
                        id="preco-custo"
                        required
                        onKeyPress="return(moeda(this,'.',',',event))"
                    >
                    
                    <span>Preço de venda</span>
                    <input 
                        type="text"
                        title="Preso de venda"
                        placeholder="R$ por unidade"
                        name="preco_venda"
                        id="preco-venda"
                        required
                        onKeyPress="return(moeda(this,'.',',',event))"
                    >
                </div>

                <div class="btn-forms">
                    <button type="link" title="Cancelar cadastro" >Cancelar</button>
                    <button type="reset" title="Limpar formulário" >Limpar</button>
                    <button type="submit" title="Concluir Cadastro" >Cadastrar</button>
                </div>
                
            </form>
        </section>
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