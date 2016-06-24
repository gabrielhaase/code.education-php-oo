<?php
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
namespace GHA\Cliente\Type;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------
use GHA\Cliente\Cliente;
use GHA\Cliente\Util\ClientePJInterface;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------

class ClientePJ extends Cliente implements ClientePJInterface {
    
    private $cnpj;
    private $enderecoCobranca;
    
    public function __construct($id, $nome, $cnpj, $importancia, $endereco, $enderecoCobranca) {
        $this->id = $id;
        $this->tipoCliente = 'PJ';
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->importancia = $importancia;
        $this->endereco = $endereco;
        $this->enderecoCobranca = $enderecoCobranca;
    }
    
    // CNPJ -------------------------------------------------------------------
    public function getCnpj() {
        return $this->cnpj;
    }
    
    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
        return $this;
    }
    
    // Endereço cobrança -------------------------------------------------------------------
    public function getEnderecoCobranca() {
        return $this->enderecoCobranca;
    }
    
    public function setEnderecoCobranca($endereco) {
        $this->enderecoCobranca = $endereco;
        return $this;
    }
    
}