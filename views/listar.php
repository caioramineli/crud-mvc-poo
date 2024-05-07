<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/assets/listar.css">
    <script src="views/assets/listar.js" defer></script>
    <title>Listar fornecedores</title>
</head>

<body>
    <table id="tabela">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>CNPJ</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fornecedor = $relacaoFornecedores->fetch(PDO::FETCH_ASSOC)) {
                extract($fornecedor);
                echo "<tr>";
                echo "<td>$for_cod</td>";
                echo "<td>$for_nome</td>";
                echo "<td>$for_telefone</td>";
                echo "<td>$for_email</td>";
                echo "<td>$for_cnpj</td>";
                echo "<td><img class='btn-update' src='views/src/update.png' name=''><img class='btn-delete' src='views/src/delete.png'></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>