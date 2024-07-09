<?= $this->extend('master')?>
<?= $this->section('content')?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle e Contagem de Estoque</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Adicionando ícones FontAwesome -->
    <style>
  

<section class="py-5" id="features">
    /* Estilos gerais */
    body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            position: relative;
        }


        .container {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }


        /* Estilos da tabela */
        .table-container {
            margin-top: 90px;
            width: 100%;
            overflow-x: auto;
            /* Adicionando rolagem horizontal para a tabela em telas pequenas */
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }


        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }


        th {
            background-color: #f2f2f2;
        }


        tr:nth-child(even) {
            background-color: #f2f2f2;
        }


        tr:hover {
            background-color: #ddd;
        }








        /* Estilos da barra lateral */
        .sidebar {
            width: 100%;
            max-width: 300px;
            /* Limitando a largura máxima da barra lateral */
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Adicionando sombra */
            margin-bottom: 20px;
        }








        .sidebar h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }








        .sidebar button {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            text-align: left;
            background-color: #f2f2f2;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }


        .sidebar button:hover {
            background-color: #e0e0e0;
        }


        /* Estilos do ícone */
        .sidebar .icon {
            margin-right: 10px;
        }


        /* Estilos da imagem */
        .logo {
            width: 100%;
            max-width: 250px;
            height: auto;
            margin-bottom: 20px;
        }


        /*Estilo da barra de busca*/
        #divBusca {
            background-color: #E0EEEE;
            border: solid 2px #1a8ae5;
            background-color: #bbdffb;
            border-radius: 10px;

            width: 400px;
            height: 32px;
            bottom: 900px;
            margin-left: 50px;
            transform: translateX(-10%);
            /* Ajustando para centralizar */
            margin-top: 0px;
            /* Ajustando para sobrepor à tabela */
        }


        #txtBusca {
            float: left;
            background-color: transparent;
            padding-left: 118px;
            font-size: 18px;
            border: none;
            height: 30px;
            width: 110px;
        }


        #btnBusca {
            border: none;
            float: right;
            height: 32px;
            border-radius: 0 7px 7px 0;
            width: 70px;
            font-weight: bold;
            background: #1a8ae5;
        }



        #divBusca img {
            float: left;
        }


        /* Estilo do botão de relatório */
        #btnRelatorio {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #1a8ae5;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Estilo do botão de produtos */
        #btnProdutos {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #1a8ae5;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }



        

        @media only screen and (min-width: 768px) {
            .container {
                justify-content: space-between;
                /* Posiciona os elementos lado a lado */
                padding: 20px 40px;
            }


            .table-container {
                flex: 1;
                /* A tabela ocupa todo o espaço restante */
                margin-left: -439px;
                /* Adiciona espaço entre a barra lateral e a tabela */
            }
        }
    </style>
</head>


<body>
    <div class="container">
        <div class="sidebar">
            <img class="logo" src="imagens/logoppi.png" alt="Logo PPI">
            <h1>Menu</h1>
            <button><i class="fas fa-home icon"></i> Início</button>
            <button><i class="fas fa-pencil-alt icon"></i> Ajustes de Inventário</button>
            <button><i class="fas fa-archive icon"></i> Estoques</button>
            <button><i class="fas fa-coins icon"></i> Compra e Venda</button>
            <button><i class="fas fa-users icon"></i> Fornecedores</button>
        </div>


        <div id="divBusca">
            <alt="Buscar..." />
            <input type="text" id="txtBusca" placeholder="Buscar..." />
            <button id="btnBusca">Buscar
            </button>
        </div>

        <div id="bntRelatorio">
            <button id="btnRelatorio">Relatório</button>
        </div>

        <div id="bntProdutos">
            <button id="btnProdutos">Produtos</button>
        </div>



        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                        <th>Preço Unitário</th>
                        <th>Quantidade Estoque</th>
                        <th>Local de Armazenamento</th>
                        <th>Comentário</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Linhas com células vazias para nova tabela -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <!-- Repita as linhas acima para adicionar mais linhas conforme necessário -->
                </tbody>
            </table>


            <!-- Adicione mais tabelas conforme necessário -->


        </div>
</body>


</html>

<?= $this->endSection('content')?>