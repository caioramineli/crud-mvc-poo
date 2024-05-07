<?php

require_once "models/Fornecedor.php";

class FornecedorController
{

    private $fornecedorModel;


    public function __construct()
    {
        $this->fornecedorModel = new Fornecedor();
    }

    public function inserir($nome, $telefone, $email, $cnpj)
    {
        return $this->fornecedorModel->create($nome, $telefone, $email, $cnpj);
    }

    public function listar()
    {
        $relacaoFornecedores = $this->fornecedorModel->recovery();
        $relacaoFornecedores->execute();

        if ($relacaoFornecedores->rowCount() > 0) {
            require_once "views/listar.php";
        } else {
            echo "Nenhum fornecdeor encontrado!";
        }
    }

    public function listarId($id)
    {
        $relacaoFornecedores = $this->fornecedorModel->recoveryById($id);
        $relacaoFornecedores->execute();

        if ($relacaoFornecedores->rowCount() > 0) {
            require_once "views/listar.php";
        } else {
            echo "Nenhum resultado encontrado para o ID fornecido!";
        }
    }

    public function listarNome($nome)
    {
        $relacaoFornecedores = $this->fornecedorModel->recoveryByName($nome);
        $relacaoFornecedores->execute();

        if ($relacaoFornecedores->rowCount() > 0) {
            require_once "views/listar.php";
        } else {
            echo "Nenhum resultado encontrado para o nome fornecido!";
        }
    }

    public function atualizar($id, $nome, $telefone, $email, $cnpj)
    {
        return $this->fornecedorModel->update($id, $nome, $telefone, $email, $cnpj);
    }

    public function deletar($id)
    {
        return $this->fornecedorModel->delete($id);
    }
}


$forController = new FornecedorController();
$recuperarAtual = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    switch ($_POST['action']) {
        case 'create':
            require_once "views/cadastrar.php";
            if (isset($_POST['cadastrar'])) {
                $forController->inserir($_POST['for_nome'], $_POST['for_telefone'], $_POST['for_email'], $_POST['for_cnpj']);
                require_once "index.php";
            }
            break;
        case 'recovery':
            $forController->listar();
            $recuperarAtual = 2;
            break;
        case 'recoveryByID':
            $forController->listarId($_POST['for_cod']);
            $recuperarAtual = 3;
            break;
        case 'recoveryByName':
            $forController->listarNome($_POST['for_nome']);
            $recuperarAtual = 4;
            break;
        case 'update':
            $forController->atualizar($_POST['for_cod'], $_POST['for_nome'], $_POST['for_telefone'], $_POST['for_email'], $_POST['for_cnpj']);
            break;
        case 'delete':
            $forController->deletar($_POST['for_cod']);
            break;
        default:
            echo "Ação inválida.";
            break;
    }
}
if ($recuperarAtual == 1) {
    $forController->listar();
}
