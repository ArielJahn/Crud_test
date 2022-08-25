<?php
    if (isset($_POST['deletar'])){
        $sql = "DELETE FROM fornecedores where IDFornecedor = :IDFornecedor";
        $parse = $conn -> prepare($sql);
        $parse->execute(array("IDFornecedor" => $_GET['IDFornecedor']));
        header("Location: ?fornecedores_lista");
    }
?>

<h1>Deletar Fornecedores</h1>
<?php
    $sql = "SELECT NomeContato, cep, Telefone, IDFornecedor from fornecedores where IDFornecedor = :IDFornecedor";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("IDFornecedor" => $_GET['IDFornecedor']));
    
    $linha = $consulta -> fetch();
?>

<tr>
                    <td><?php echo $linha['IDFornecedor']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td><?php echo $linha['cep']; ?></td>
                    <td><?php echo $linha['Telefone']; ?></td>
</tr>


<form method="post">
    
    <input type="submit" name="deletar" value="Deletar">
</form>

<!doctype html>
<html lang="en">
  <head>