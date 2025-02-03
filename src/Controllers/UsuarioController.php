<?php
namespace Src\Controllers;

use Src\Models\Usuario;
use Src\Services\ValidacaoService;

class UsuarioController {
    private $usuarioModel;
    private $validacaoService;

    public function __construct() {
        $this->usuarioModel = new Usuario();
        $this->validacaoService = new ValidacaoService();
    }

    public function cadastrar($dados) {
        // Validações
        if ($this->validacaoService->validarCadastro($dados)) {
            return $this->usuarioModel->inserir($dados);
        }
        return false;
    }

    public function listar() {
        return $this->usuarioModel->buscarTodos();
    }

    public function buscarPorId($id) {
        return $this->usuarioModel->buscarPorId($id);
    }

    public function atualizar($dados) {
        if ($this->validacaoService->validarAtualizacao($dados)) {
            return $this->usuarioModel->atualizar($dados);
        }
        return false;
    }
}