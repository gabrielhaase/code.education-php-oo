<?php
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
namespace GHA\Cliente\Util;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------

interface ClientePJInterface {
    
    public function getCnpj();
    public function setCnpj($cnpj);
    
    public function getEnderecoCobranca();
    public function setEnderecoCobranca($endereco);
    
}