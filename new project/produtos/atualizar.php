<h1>Atualizar Fornecedor</h1>

<?php
    if(isset($_POST['atualizar'])){
        $sql = "UPDATE produtos
        SET NomeProduto = :NomeProduto
        , PrecoUnitario = :PrecoUnitario
        , NomeContato = :NomeContato
        where IDProduto = :IDProduto";


        $atualizar = $conn -> prepare($sql);
    
            if ($atualizar-> execute(array(
                "NomeProduto" => $_POST['NomeProduto'],
                "PrecoUnitario" => $_POST['PrecoUnitario'],
                "NomeContato" => $_POST['NomeContato'],
                "IDProduto" => $_GET['IDProduto']
            )))
            {
                echo "Dados atualizados";
            }
    }
    $sql = "SELECT p.IDProduto, p.NomeProduto, p.PrecoUnitario, f.NomeContato 
    from produtos p inner join fornecedores f on (p.IDFornecedor = f.IDFornecedor)";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();

     
    $sql = "SELECT * FROM produtos where IDProduto = :IDProduto";
    $produto = $conn -> prepare($sql);
    $produto -> execute(array("IDProduto" => $_GET['IDProduto']));

    $linha = $produto -> fetch();

?>
<form method="post">
Nome: <input type="text" name="NomeProduto" value="<?php echo $linha['NomeProduto']; ?>">
<br>
Preço: <input type="text" name="preco" value="<?php echo $linha['PrecoUnitario']; ?>">
<br>
Fornecedor:
<select name="fornecedor">
        <?php
            $sql = "SELECT * from fornecedores";
            $consulta = $conn->prepare($sql);
            $consulta->execute();
            while ($grupo = $consulta->fetch()) {
                if ($grupo['IDFornecedor'] == $linha['IDFornecedor'])
                {
                    echo "<option value=\"{$grupo['IDFornecedor']}\" selected>{$grupo['NomeContato']}</option>";
                }else{
                    echo "<option value=\"{$grupo['IDFornecedor']}\">{$grupo['NomeContato']}</option>";
                }
            }
            ?>
    </select>
    <br>
ID: <input type="text" name="id1" value="<?php echo $linha['IDProduto']; ?>">
<br>
<input type="submit" name="atualizar" value="Atualizar"> 
</form> 
