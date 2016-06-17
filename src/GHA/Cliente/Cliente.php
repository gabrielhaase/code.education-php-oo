<?php
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
namespace GHA\Cliente;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------
use GHA\Cliente\Util\ClienteImportanciaInterface;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------

abstract class Cliente implements ClienteImportanciaInterface {
    
    protected $tipoCliente;
    protected $nome;
    protected $endereco;
    protected $importancia;
    
    // tipo cliente -------------------------------------------------------------------
    public function getTipoCliente() {
        return $this->tipoCliente;
    }
    
    public function setTipoCliente($tipoClente) {
        $this->tipoCliente = $tipoClente;
        return $this;
    }

    // nome -------------------------------------------------------------------
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    
    // endereço -------------------------------------------------------------------
    public function getEndereco() {
        return $this->endereco;
    }
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }
    
    // importância -------------------------------------------------------------------
    public function getImportancia() {
        return $this->importancia;
    }
    
    public function setImportancia($importancia) {
        $this->importancia = $importancia;
        return $this;        
    }
    
}