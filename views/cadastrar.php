<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/assets/cadastrar.css">
    <script src="views/assets/cadastrar.js" defer></script>
    <title>Cadastrar</title>
</head>

<body>
    <section class="modal-inserir">
        <form action="index.php" method="post" id="form-inserir">
            <img src="views/src/close.png" id="fechar-modal-inserir">
            <h2>Criar Fornecedor</h2>
            <input type="hidden" name="action" value="create">

            <label for="for_nome">Nome:</label>
            <input type="text" name="for_nome" id="for_nome" required>

            <label for="for_telefone">Telefone:</label>
            <input type="text" name="for_telefone" id="for_telefone" required>

            <label for="for_email">Email:</label>
            <input type="email" name="for_email" id="for_email" required>

            <label for="for_cnpj">CNPJ:</label>
            <input type="text" name="for_cnpj" id="for_cnpj" required>

            <div class="btns">
                <button type="submit" name="cadastrar">Cadastrar</button>
                <button type="reset" id="btn-cancelar-inserir">Cancelar</button>
            </div>
        </form>
    </section>
</body>

</html>