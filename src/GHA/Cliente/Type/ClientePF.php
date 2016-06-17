<?php
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
namespace GHA\Cliente\Type;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------
use GHA\Cliente\Cliente;
use GHA\Cliente\Util\ClientePFInterface;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------

class ClientePF extends Cliente implements ClientePFInterface {
    
    private $cpf;
    
    public function __construct($nome, $cpf, $importancia, $endereco) {
        $this->tipoCliente = 'PF';
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->importancia = $importancia;
        $this->endereco = $endereco;
    }
    
    // CPF -------------------------------------------------------------------
    public function getCpf() {
        return $this->cpf;
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }    
    
}