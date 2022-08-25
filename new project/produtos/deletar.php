<?php
    if (isset($_POST['deletar'])){
        $sql = "DELETE from produtos where IDProduto = :IDProduto";
        $parse = $conn -> prepare($sql);
        $parse->execute(array("IDProduto" => $_GET['IDProduto']));
        header("Location: ?pagina=produtos_lista");
    }
?>

<h1>Deletar Produtos</h1>
<?php
    $sql = "SELECT produtos.IDProduto, produtos.NomeProduto, produtos.PrecoUnitario, fornecedores.NomeContato from produtos
     inner join fornecedores on (produtos.IDFornecedor = fornecedores.IDFornecedor) where produtos.IDProduto = :IDProduto ";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("IDProduto" => $_GET['IDProduto']));
    
    $linha = $consulta -> fetch();

    
?>
<tr>
                    <td><?php echo $linha['IDProduto']; ?></td>
                    <td><?php echo $linha['NomeProduto']; ?></td>
                    <td><?php echo $linha['PrecoUnitario']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
</tr>

<form method="post">
    
    <input type="submit" name="deletar" value="Deletar">
</form>

<!doctype html>
<html lang="en">
  <head>