<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Ibisco</title>
</head>
<body>
    <h1>Clientes</h1>

    <table>
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td>CPF</td>
        </tr>

        <tr>
            <td>
                <?php echo $objCliente->getNome(); ?>
            </td>

            <td>
                <?php echo $objCliente->getEmail(); ?>
            </td>

            <td>
                <?php echo $objCliente->getTelefone(); ?>
            </td>

            <td>
                <?php echo $objCliente->getCpf(); ?>
            </td>
        </tr>
    </table>

    
</body>
</html>