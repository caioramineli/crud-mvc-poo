<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/assets/index.css">
    <script src="views/assets/index.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <title>CRUD - PHP - MVC</title>
</head>

<body>
    <header>
        <h1>CRUD de Fornecedores</h1>
    </header>

    <main>
        <div class="container-btns-inserir-mostrar">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form-cadastrar">
                <input type="hidden" name="action" value="create">
                <button id="btn-cadastrar" type="submit">Cadastrar</button>
            </form>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form-mostrar">
                <input type="hidden" name="action" value="recovery">
                <button type="submit" id="btn-mostar">Mostrar Todos</button>
            </form>
        </div>

        <section class="container-recovery-id-nome">

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form-r-id">
                <h3>Recuperar Fornecedor pelo ID</h3>
                <input type="hidden" name="action" value="recoveryByID">
                <label for="for_cod">ID do Fornecedor:</label>
                <input type="number" name="for_cod" id="for_cod" min="1" required>
                <button type="submit">Recuperar pelo ID</button>
            </form>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form-r-nome">
                <h3>Recuperar Fornecedor pelo Nome</h3>
                <input type="hidden" name="action" value="recoveryByName">
                <label for="for_nome">Nome do Fornecedor:</label>
                <input type="text" name="for_nome" id="for_nome" min="1" required>
                <button type="submit">Recuperar pelo Nome</button>
            </form>
        </section>

        <section class="modal-update">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form-update">
                <img src="views/src/close.png" id="fechar-modal-update">
                <h2>Atualizar Fornecedor</h2>
                <input type="hidden" name="action" value="update">

                <label for="for_cod">ID do Fornecedor:</label>
                <input type="number" name="for_cod" id="for_cod_update" class="inputs-update" readonly>

                <label for="for_nome">Novo Nome:</label>
                <input type="text" name="for_nome" id="for_nome" class="inputs-update" required>

                <label for="for_telefone">Novo Telefone:</label>
                <input type="text" name="for_telefone" id="for_telefone_update" class="inputs-update" required>

                <label for="for_email">Novo Email:</label>
                <input type="email" name="for_email" id="for_email" class="inputs-update" required>

                <label for="for_cnpj">Novo CNPJ:</label>
                <input type="text" name="for_cnpj" id="for_cnpj_update" class="inputs-update" required>
                <div>
                    <button type="submit">Atualizar Fornecedor</button>
                    <button type="button" id="btn-apagar-update">Limpar</button>
                </div>
            </form>
        </section>

        <section class="modal-delete">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form-delete">
                <img src="views/src/close.png" id="fechar-modal-delete">
                <h2>Excluir Fornecedor</h2>
                <input type="hidden" name="action" value="delete">

                <label for="for_cod">ID do Fornecedor:</label>
                <input type="text" name="for_cod" id="for_cod_delete" readonly>

                <h3>Deseja realmente excluir?</h3>

                <div>
                    <button type="submit">Excluir Fornecedor</button>
                    <button type="button" id="btn-cancelar-delete">Cancelar</button>
                </div>
            </form>
        </section>

        <section class="container-fornecedores">
            <?php
                require_once "controllers/FornecedorController.php";
            ?>
        </section>
    </main>


</body>

</html>