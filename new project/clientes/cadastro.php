<h1>Cadastro de funcionarios</h1>
<?php
if(isset($_POST['gravar'])){
    $sql = "INSERT INTO clientes(IDCliente, NomeContato,Cep,Endereco,Telefone)
        values (:IDCliente,:NomeContato,:CEP,:Endereco,:Telefone)";
       
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute(array("NomeContato" => $_POST['NomeContato'],
    "CEP" => $_POST['cep'],
    "Endereco" => $_POST['endereco'],
    "Telefone" => $_POST['telefone']));
}

?>
<form method="post">
    Nome:
    <input type="text" name="NomeContato" >
    <br>
    
    Endereço:
    <input type="text" name="endereco" >
        <br>
    CEP:
        <input type="text" name="cep" >
    <br>
    Telefone:
    <input type="text" name="telefone" >
    <br>
        <input type="submit" name="gravar" >
    </select>
</form> 


 