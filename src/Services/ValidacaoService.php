<?php
namespace Src\Services;

class ValidacaoService {
    public function validarCadastro($dados) {
        // Validações básicas
        if (empty($dados['nome']) || 
            empty($dados['cpf']) || 
            empty($dados['telefone']) || 
            empty($dados['endereco'])) {
            return false;
        }

        // Validação de CPF (simplificada)
        if (!$this->validarCPF($dados['cpf'])) {
            return false;
        }

        return true;
    }

    public function validarCPF($cpf) {
        // Implementação básica de validação de CPF
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        
        if (strlen($cpf) != 11) {
            return false;
        }

        return true;
    }

    public function validarAtualizacao($dados) {
        return $this->validarCadastro($dados);
    }
}