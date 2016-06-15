<?php

class Cliente {
    
    private $nome;
    private $cpf;
    private $endereco;
    
    public function __construct($nome, $cpf, $endereco) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }
    
    public function getData() {
        $dadosCliente = [
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'endereco' => $this->endereco
        ];
        
        return $dadosCliente;
    }
    
    
    
}