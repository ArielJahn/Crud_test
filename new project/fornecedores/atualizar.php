<h1>Atualizar Fornecedor</h1>

<?php
    if(isset($_POST['atualizar'])){
        $sql = "UPDATE fornecedores
        set NomeContato = :NomeContato
        , cep = :cep
        , Telefone = :Telefone
        where IDFornecedor = :IDFornecedor";

        $atualizar = $conn -> prepare($sql);
    
            if ($atualizar-> execute(array(
                "NomeContato" => $_POST['NomeContato'],
                "cep" => $_POST['cep'],
                "Telefone" => $_POST['Telefone'],
                "IDFornecedor" => $_GET['IDFornecedor']
            )))
            {
                echo "Dados atualizados";
            }
    }


    $sql = "SELECT * FROM fornecedores where IDFornecedor = :IDFornecedor";
    $produto = $conn -> prepare($sql);
    $produto -> execute(array("IDFornecedor" => $_GET['IDFornecedor']));

    $linha = $produto -> fetch();

?>
<form method="post">
Nome: <input type="text" name="NomeContato" value="<?php echo $linha['NomeContato']; ?>">
CEP: <input type="text" name="cep" value="<?php echo $linha['cep']; ?>">
Telefone: <input type="text" name="Telefone" value="<?php echo $linha['Telefone']; ?>">
<br>
<input type="submit" name="atualizar" value="Atualizar"> 
</form> 
