<h1>Listagem de Fornecedores</h1>
<table border="1" class="oi"><style> .oi { color: black; background-color: white; border-color: gray; text-align: center;margin: 0 auto;} body {background-color: white; } h1 { text-align: center; color: black;}</style>
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Cep</td>
        <td>Endereço</td>
        <td>Telefone</td>
        <td>Atualizar</td>
        <td>Deletar</td>
    </tr>
<?php
    $sql = "SELECT IDFuncionario, Nome, Sobrenome, Cep, Endereco ,TelefoneResidencial from funcionarios";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();

    while($linha = $consulta->fetch()) {
        ?>
                <tr>
                    <td><?php echo $linha['IDFuncionario']; ?></td>
                    <td><?php echo $linha['Nome']; ?></td>
                    <td><?php echo $linha['Sobrenome']; ?></td>
                    <td><?php echo $linha['Cep']; ?></td>
                    <td><?php echo $linha['Endereco']; ?></td>
                    <td><?php echo $linha['TelefoneResidencial']; ?></td>
                    <td><?php echo " <a class='btn btn-primary' href=\"?pagina=funcionarios_atualizar&IDFuncionario={$linha['IDFuncionario']}\">Atualizar</a>"; ?></td>
                    <td><?php echo " <a class='btn btn-danger' href=\"?pagina=funcionarios_deletar&IDFuncionario={$linha['IDFuncionario']}\">Deletar</a>"; ?></td>   
                </tr>
<?php
    }
    ?>

</table>
</body>
</html>