<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos/fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
<div>
<?php
    session_start();

    include_once('lib/conexao.php');
    include_once('lib/sql.php');
    include ('lib/menu.php');

    if (isset($_GET['pagina']) & $_GET['pagina'] == 'produtos_lista')
    {
        include 'produtos/listagem.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'produtos_cadastro')
    {
        include 'produtos/cadastro.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'produtos_deletar')
    {
        include 'produtos/deletar.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'fornecedores_lista')
    {
        include 'fornecedores/listagem.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'fornecedores_cadastro')
    {
        include 'fornecedores/cadastro.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'fornecedores_deletar')
    {
        include 'fornecedores/deletar.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'fornecedores_atualizar')
    {
        include 'fornecedores/atualizar.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'produtos_atualizar')
    {
        include 'produtos/atualizar.php';
    }
    



    if (isset($_GET['pagina']) & $_GET['pagina'] == 'funcionarios_lista')
    {
        include 'funcionarios/listagem.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'funcionarios_cadastro')
    {
        include 'funcionarios/cadastro.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'funcionarios_deletar')
    {
        include 'funcionarios/deletar.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'funcionarios_atualizar')
    {
        include 'funcionarios/atualizar.php';
    }



    
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'clientes_lista')
    {
        include 'clientes/listagem.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'clientes_cadastro')
    {
        include 'clientes/cadastro.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'clientes_deletar')
    {
        include 'clientes/deletar.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'clientes_atualizar')
    {
        include 'clientes/atualizar.php';
    }


?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>