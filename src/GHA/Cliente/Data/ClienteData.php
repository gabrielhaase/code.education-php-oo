<?php
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
namespace GHA\Cliente\Data;

use GHA\Cliente\Type\ClientePF;
use GHA\Cliente\Type\ClientePJ;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------

class ClienteData {
    
    private $clientes;
    
    public function __construct() {
        $this->clientes = [
            0 => new ClientePF('Maria José', '968.549.372-30', '1', 'Rua Um, 100 - São Paulo - SP'),
            1 => new ClientePF('José da Silva', '666.674.837-94', '2', 'Rua Dois, 200 - São Paulo - SP'),
            2 => new ClientePF('Antonio Costa', '838.673.360-83', '3', 'Rua Três, 300 - São Paulo - SP'),
            3 => new ClientePF('João Pereira', '182.302.361-43', '4', 'Rua Quatro, 400 - São Paulo - SP'),
            4 => new ClientePF('Francisco Arruda', '695.348.870-05', '5', 'Rua Cinco, 500 - São Paulo - SP'),
            5 => new ClientePF('Albert Einsten', '222.169.371-00', '5', 'Rua Seis, 600 - São Paulo - SP'),
            6 => new ClientePF('Rodrigo Alvarenda', '571.111.125-63', '4', 'Rua Sete, 700 - São Paulo - SP'),
            7 => new ClientePF('Alexandre Oliveira', '634.447.116-62', '3', 'Rua Oito, 800 - São Paulo - SP'),
            8 => new ClientePF('Michael Jackson', '565.241.147-36', '2', 'Rua Nove, 900 - São Paulo - SP'),
            9 => new ClientePF('Valdo Arruda', '085.787.750-07', '1', 'Rua Dez, 1000 - São Paulo - SP'),
            10 => new ClientePJ('Empresa 01', '61.198.637/0001-29', '1', 'Rua Um, 1100 - São Paulo - SP', 'Rua Onze, 100 - São Paulo - SP'),
            11 => new ClientePJ('Empresa 02', '47.924.036/0001-25', '2', 'Rua Dois, 1200 - São Paulo - SP', 'Rua Doze, 200 - São Paulo - SP'),
            12 => new ClientePJ('Empresa 03', '04.029.542/0001-48', '3', 'Rua Três, 1300 - São Paulo - SP', 'Rua Treze, 300 - São Paulo - SP'),
            13 => new ClientePJ('Empresa 04', '11.229.345/0001-38', '4', 'Rua Quatro, 1400 - São Paulo - SP', 'Rua Quatorze, 400 - São Paulo - SP'),
            14 => new ClientePJ('Empresa 05', '51.558.451/0001-80', '5', 'Rua Cinco, 1500 - São Paulo - SP', 'Rua Quize, 500 - São Paulo - SP'),
            15 => new ClientePJ('Empresa 06', '64.481.668/0001-80', '5', 'Rua Seis, 1600 - São Paulo - SP', 'Rua Dezeseis, 600 - São Paulo - SP'),
            16 => new ClientePJ('Empresa 07', '31.518.121/0001-53', '4', 'Rua Sete, 1700 - São Paulo - SP', 'Rua Dezesete, 700 - São Paulo - SP'),
            17 => new ClientePJ('Empresa 08', '81.043.249/0001-86', '3', 'Rua Oito, 1800 - São Paulo - SP', 'Rua Dezoito, 800 - São Paulo - SP'),
            18 => new ClientePJ('Empresa 09', '44.968.547/0001-50', '2', 'Rua Nove, 1900 - São Paulo - SP', 'Rua Dezenove, 900 - São Paulo - SP'),
            19 => new ClientePJ('Empresa 10', '89.253.481/0001-50', '1', 'Rua Dez, 2000 - São Paulo - SP', 'Rua Vinte, 1000 - São Paulo - SP')   
        ];
    }
    
    public function getData( $ordem ) {
        $ordem == "DESC" ? krsort($this->clientes) : null;
        return $this->clientes;
    }
    
}