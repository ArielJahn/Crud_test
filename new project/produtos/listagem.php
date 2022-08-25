<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Listagem de produtos</h1>
<table border="1" class="oi" ><style> .oi { color: black; background-color: white; border-color: gray; text-align: center;margin: 0 auto;} body {background-color: white; } h1 { text-align: center; color: black;}</style>
    <tr>
        <td><strong>Código</strong></td>
        <td><strong>Nome</strong></td>
        <td><strong>Valor</strong></td>
        <td><strong>Fornecedor</strong></td>
        <td><strong>Atualizar</strong></td>
        <td><strong>Deletar</strong></td>
    </tr>
<?php
    $sql = "SELECT produtos.IDProduto, produtos.NomeProduto, produtos.PrecoUnitario, fornecedores.NomeContato 
    from produtos inner join fornecedores on (produtos.IDFornecedor = fornecedores.IDFornecedor)";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();

    while($linha = $consulta->fetch()) {
        ?>
       
    <tr>
                    <td><?php echo $linha['IDProduto']; ?></td>
                    <td><?php echo $linha['NomeProduto']; ?></td>
                    <td><?php echo $linha['PrecoUnitario']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td> <?php echo "<a class='btn btn-primary' href=\"?pagina=produtos_atualizar&IDProduto={$linha['IDProduto']}\">Atualizar </a>";?> </td>
                    <td> <?php echo "<a class='btn btn-danger' href=\"?pagina=produtos_deletar&IDProduto={$linha['IDProduto']}\"> Deletar</a>";?> </td>
                    <td> <?php echo "<br>";?> </td>

    </tr>
    <?php
   
    }
    ?>
   
</table>
</body>
</html>
