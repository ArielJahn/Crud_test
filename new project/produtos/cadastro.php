<h1>Cadastro de produtos</h1>
<?php
if(isset($_POST['gravar'])){
    $sql = "INSERT INTO produtos(NomeProduto,PrecoUnitario)
        values (:NomeProduto,:PrecoUnitario)";
       
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute(array("NomeProduto" => $_POST['NomeProduto'],
    "PrecoUnitario" => $_POST['PrecoUnitario'],
    "IDProduto" => $_POST['IDProduto']));
}
?>
<form method="post">
    Nome:
    <input type="text" name="NomeProduto" >
    <br>
    Valor:
    <input type="text" name="PrecoUnitario" >
    <br>
    Fornecedor:
    <select name="fornecedores">
        <?php
            $sql = "SELECT * from fornecedores";
            $consulta = $conn->prepare($sql);
            $consulta->execute();
            while($linha = $consulta->fetch())
            {
                echo "<option value=\"{$linha['IDFornecedor']}\">{$linha['NomeContato']}</option>";
            }
        ?>
        <br>
        <input type="submit" name="gravar" >
    </select>
</form> 
