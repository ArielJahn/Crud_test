<?php
    if (isset($_POST['deletar'])){
        $sql = "DELETE FROM clientes where IDCliente = :IDCliente";
        $parse = $conn -> prepare($sql);
        $parse->execute(array("IDCliente" => $_GET['IDCliente']));
        header("Location: ?clientes_lista");
    }
?>

<h1>Deletar clientes</h1>
<?php
    $sql = "SELECT NomeContato, CEP, Telefone, IDCliente, Endereco from clientes where IDCliente = :IDCliente";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("IDCliente" => $_GET['IDCliente']));
    
    $linha = $consulta -> fetch();
?>

<tr>
                    <td><?php echo $linha['IDCliente']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td><?php echo $linha['Endereco']; ?></td>
                    <td><?php echo $linha['CEP']; ?></td>
                    <td><?php echo $linha['Telefone']; ?></td>
</tr>


<form method="post">
    
    <input type="submit" name="deletar" value="Deletar">
</form>

<!doctype html>
<html lang="en">
  <head>