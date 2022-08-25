<h1>Atualizar Fornecedor</h1>

<?php
    if(isset($_POST['atualizar'])){
        $sql = "UPDATE clientes
        set NomeContato = :NomeContato
        , Endereco = :Endereco
        , CEP = :CEP
        , Telefone = :Telefone
        where IDCliente = :IDCliente";

        $atualizar = $conn -> prepare($sql);
    
            if ($atualizar-> execute(array(
                "NomeContato" => $_POST['NomeContato'],
                "Endereco" => $_POST['Endereco'],
                "CEP" => $_POST['CEP'],
                "Telefone" => $_POST['Telefone'],
                "IDCliente" => $_GET['IDCliente']
            )))
            {
                echo "Dados atualizados";
            }
    }


    $sql = "SELECT * FROM clientes where IDCliente = :IDCliente";
    $produto = $conn -> prepare($sql);
    $produto -> execute(array("IDCliente" => $_GET['IDCliente']));

    $linha = $produto -> fetch();

?>
<form method="post">
Nome: <input type="text" name="NomeContato" value="<?php echo $linha['NomeContato']; ?>">
Endereço: <input type="text" name="Endereco" value="<?php echo $linha['Endereco']; ?>">
CEP: <input type="text" name="CEP" value="<?php echo $linha['CEP']; ?>">
Telefone: <input type="text" name="Telefone" value="<?php echo $linha['Telefone']; ?>">
<br>
<input type="submit" name="atualizar" value="Atualizar"> 
</form> 
