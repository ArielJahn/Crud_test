<h1>Listagem de Fornecedores</h1>
<table border="1" class="oi"><style> .oi { color: black; background-color: white; border-color: gray; text-align: center;margin: 0 auto;} body {background-color: white; } h1 { text-align: center; color: black;}</style>
    <tr>
        <td>Código</td>
        <td>Fornecedor</td>
        <td>CEP</td>
        <td>Telefone</td>
        <td>Atualizar</td>
        <td>Deletar</td>
    </tr>
<?php
    $sql = "SELECT f.IDFornecedor, f.NomeContato, f.cep, f.Telefone from fornecedores f";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();

    while($linha = $consulta->fetch()) {
        ?>
                <tr>
                    <td><?php echo $linha['IDFornecedor']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td><?php echo $linha['cep']; ?></td>
                    <td><?php echo $linha['Telefone']; ?></td>
                    <td><?php echo " <a class='btn btn-primary' href=\"?pagina=fornecedores_atualizar&IDFornecedor={$linha['IDFornecedor']}\">Atualizar</a>"; ?></td>
                    <td><?php echo " <a class='btn btn-danger' href=\"?pagina=fornecedores_deletar&IDFornecedor={$linha['IDFornecedor']}\">Deletar</a>"; ?></td>   
                </tr>
<?php
    }
    ?>

</table>
</body>
</html>