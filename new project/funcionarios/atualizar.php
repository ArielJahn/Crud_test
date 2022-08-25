<h1>Atualizar Funcionarios</h1>
<?php
    if(isset($_POST['atualizar'])){
        $sql = "UPDATE funcionarios
        set Nome = :Nome
        , Sobrenome = :Sobrenome
        , Cep = :Cep
        , Endereco = :Endereco
        , TelefoneResidencial = :TelefoneResidencial
        where IDFuncionario = :IDFuncionario";

        $atualizar = $conn -> prepare($sql);
    
            if ($atualizar-> execute(array(
                "Nome" => $_POST['Nome'],
                "Sobrenome" => $_POST['Sobrenome'],
                "Cep" => $_POST['Cep'],
                "Endereco" => $_POST['Endereco'],
                "TelefoneResidencial" => $_POST['TelefoneResidencial'],
                "IDFuncionario" => $_GET['IDFuncionario'])))
            {
                echo "Dados atualizados";
            }
    }


    $sql = "SELECT * FROM funcionarios where IDFuncionario = :IDFuncionario";
    $produto = $conn -> prepare($sql);
    $produto -> execute(array("IDFuncionario" => $_GET['IDFuncionario']));

    $linha = $produto -> fetch();

?>
<form method="post">
Nome: <input type="text" name="Nome" value="<?php echo $linha['Nome']; ?>">
Sobrenome: <input type="text" name="Sobrenome" value="<?php echo $linha['Sobrenome']; ?>">
Cep: <input type="text" name="Cep" value="<?php echo $linha['Cep']; ?>">
Endereco: <input type="text" name="Endereco" value="<?php echo $linha['Endereco']; ?>">
TelefoneResidencial: <input type="text" name="TelefoneResidencial" value="<?php echo $linha['TelefoneResidencial']; ?>">
<br>
<input type="submit" name="atualizar" value="Atualizar"> 
</form> 
