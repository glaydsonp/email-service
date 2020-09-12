<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo cadastro de contato no site</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th colspan="2">
                    Novo cadastro de contato no site
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Nome:
                </td>
                <td>
                    {{ $dados_email->name }}
                </td>
            </tr>
            <tr>
                <td>
                    Número de telefone:
                </td>
                <td>
                    {{ $dados_email->phone_number }}
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
