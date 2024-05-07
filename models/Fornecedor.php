<?php

require_once "DataBase.php";

class Fornecedor
{
    private $conexao;
    private $tableName = 'fornecedor';

    public function __construct()
    {
        $database = new Database('localhost', 'fornecedores', 'root', '');
        $this->conexao = $database->getConnection();
    }

    public function create($for_nome, $for_telefone, $for_email, $for_cnpj)
    {
        try {
            $comandoSQL = "INSERT INTO $this->tableName (for_nome, for_telefone, for_email, for_cnpj) values ('$for_nome', '$for_telefone', '$for_email', '$for_cnpj')";
            $acesso = $this->conexao->prepare($comandoSQL);

            if ($acesso->execute()) {
                echo "Fornecedor inserido com sucesso!";
            } else {
                echo "Erro ao inserir fornecedor!";
            }

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function recovery()
    {
        try {
            $comandoSQL = "SELECT * FROM $this->tableName ORDER BY for_cod";
            $resultado = $this->conexao->query($comandoSQL);
            return $resultado;
            
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function recoveryById($id)
    {
        try {
            $comandoSQL = "SELECT * FROM $this->tableName WHERE for_cod = $id";
            $resultado = $this->conexao->prepare($comandoSQL);
            return $resultado;

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function recoveryByName($nome)
    {
        try {
            $comandoSQL = "SELECT * FROM $this->tableName WHERE for_nome LIKE '$nome%'";
            $resultado = $this->conexao->prepare($comandoSQL);
            return $resultado;

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function update($id, $nome, $telefone, $email, $cnpj)
    {
        try {
            $comandoSQL = "UPDATE $this->tableName SET for_nome='$nome', for_telefone='$telefone', for_email='$email', for_cnpj='$cnpj' WHERE for_cod = $id";
            $acesso = $this->conexao->prepare($comandoSQL);

            if ($acesso->execute()) {
                echo "Fornecedor atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar fornecedor!";
            }
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $comandoSQL = "DELETE FROM $this->tableName WHERE for_cod=$id";
            $acesso = $this->conexao->prepare($comandoSQL);

            if ($acesso->execute()) {
                echo "Fornecedor removido com sucesso!";
            } else {
                echo "Erro ao atualizar fornecedor!";
            }
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}