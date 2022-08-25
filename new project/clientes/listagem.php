<h1>Listagem de Clientes</h1>
<table border="1" class="oi"><style> .oi { color: black; background-color: white; border-color: gray; text-align: center;margin: 0 auto;} body {background-color: white; } h1 { text-align: center; color: black;}</style>
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Endereço</td>
        <td>Cep</td>
        <td>Telefone</td>
        <td>Atualizar</td>
        <td>Deletar</td>
    </tr>
<?php
    $sql = "SELECT IDCliente, NomeContato,Endereco, CEP, Telefone from clientes";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();

    while($linha = $consulta->fetch()) {
        ?>
                <tr>
                    <td><?php echo $linha['IDCliente']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td><?php echo $linha['Endereco']; ?></td>
                    <td><?php echo $linha['CEP']; ?></td>
                    <td><?php echo $linha['Telefone']; ?></td>
                    <td><?php echo " <a class='btn btn-primary' href=\"?pagina=clientes_atualizar&IDCliente={$linha['IDCliente']}\">Atualizar</a>"; ?></td>
                    <td><?php echo " <a class='btn btn-danger' href=\"?pagina=clientes_deletar&IDCliente={$linha['IDCliente']}\">Deletar</a>"; ?></td>   
                </tr>
<?php
    }
    ?>

</table>
</body>
</html>