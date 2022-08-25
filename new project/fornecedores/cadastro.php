<h1>Cadastro de fornecedores</h1>
<?php
if(isset($_POST['gravar'])){
    $sql = "INSERT INTO fornecedores(NomeContato,cep,Telefone)
        values (:NomeContato,:cep,:Telefone)";
       
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute(array("NomeContato" => $_POST['NomeContato'],
    "cep" => $_POST['cep'],
    "Telefone" => $_POST['Telefone']));
}
?>
<form method="post">
    Nome:
    <input type="text" name="NomeContato" >
    <br>
    CEP:
    <input type="text" name="cep" >
    <br>
    Telefone:
    <input type="text" name="Telefone" >
        <br>
        <input type="submit" name="gravar" >
    </select>
</form> 
