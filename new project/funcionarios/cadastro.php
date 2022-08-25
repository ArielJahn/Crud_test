<h1>Cadastro de funcionarios</h1>
<?php
if(isset($_POST['gravar'])){
    $sql = "INSERT INTO funcionarios(Nome,Sobrenome,Cep,Endereco,TelefoneResidencial)
        values (:Nome,:Sobrenome,:Cep,:Endereco,:TelefoneResidencial)";
       
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute(array("Nome" => $_POST['Nome'],
    "Sobrenome" => $_POST['sobrenome'],
    "Cep" => $_POST['cep'],
    "Endereco" => $_POST['endereco'],
    "TelefoneResidencial" => $_POST['telefone']));
}
?>
<form method="post">
    Nome:
    <input type="text" name="Nome" >
    <br>
    Sobrenome:
    <input type="text" name="sobrenome" >
    <br>
    CEP:
    <input type="text" name="cep" >
        <br>
    Endereço:
        <input type="text" name="endereco" >
    <br>
    Telefone:
    <input type="text" name="telefone" >
    <br>
        <input type="submit" name="gravar" >
    </select>
</form> 


 