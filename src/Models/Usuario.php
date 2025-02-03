<?php
namespace Src\Models;

use Src\Controllers\DatabaseController;

class Usuario {
    private $conexao;

    public function __construct() {
        $database = new DatabaseController();
        $this->conexao = $database->getConexao();
    }

    public function inserir($dados) {
        $sql = "INSERT INTO usuarios (nome, cpf, telefone, endereco) 
                VALUES (:nome, :cpf, :telefone, :endereco)";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute($dados);
    }

    public function buscarTodos() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function atualizar($dados) {
        $sql = "UPDATE usuarios 
                SET nome = :nome, 
                    cpf = :cpf, 
                    telefone = :telefone, 
                    endereco = :endereco 
                WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute($dados);
    }
}