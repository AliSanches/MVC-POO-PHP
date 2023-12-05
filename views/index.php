<!-- Listagem de Registros -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>LISTAGEM DE CLIENTES</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>TELEFONE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($resultData as $exibir):?>
                <td><?=$exibir['id_cliente']?></td>
                <td><?=$exibir['nome_cliente']?></td>
                <td><?=$exibir['email_cliente']?></td>
                <td><?=$exibir['telefone_cliente']?></td>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>