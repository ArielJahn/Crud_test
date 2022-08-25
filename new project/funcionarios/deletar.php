<?php
    if (isset($_POST['delet'])){
        $sql = "DELETE FROM funcionarios where IDFuncionario = :IDFuncionario";
        $parse = $conn -> prepare($sql);
        $parse->execute(array("IDFuncionario" => $_GET['IDFuncionario']));
        header("Location: ?funcionarios_lista");
    }
?>

<h1>Deletar Funcionarios</h1>
<?php
    $sql = "SELECT IDFuncionario, Nome, Sobrenome, Cep ,Endereco, TelefoneResidencial from funcionarios where IDFuncionario = :IDFuncionario";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("IDFuncionario" => $_GET['IDFuncionario']));
    
    $linha = $consulta -> fetch();
?>

<tr>
                    <td><?php echo $linha['IDFuncionario']; ?></td>
                    <td><?php echo $linha['Nome']; ?></td>
                    <td><?php echo $linha['Sobrenome']; ?></td>
                    <td><?php echo $linha['Cep']; ?></td>
                    <td><?php echo $linha['Endereco']; ?></td>
                    <td><?php echo $linha['TelefoneResidencial']; ?></td>
</tr>


<form method="post">
    
    <input type="submit" name="delet" value="Deletar">
</form>

<!doctype html>
<html lang="en">
  <head>
  