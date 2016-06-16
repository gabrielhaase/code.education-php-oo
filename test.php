<?php
//------------------------------------------------------------------------------------------------------------
require_once('ClienteImportanciaInterface.php');
require_once('ClientePFInterface.php');
require_once('ClientePJInterface.php');
require_once('Cliente.php');
require_once('ClientePF.php');
require_once('ClientePJ.php');

$clientePF = new ClientePF('Gabriel', '271168488-19', '3',  'Al. dos Aicás, 1604 - São Paulo - SP');
$clientePF->setImportancia('4');
print_r($clientePF);

$clientePJ = new ClientePJ('ZABB Comunicação', '03.666.810-0001/70', '5',  'Al. dos Aicás, 1604 - São Paulo - SP');
$clientePJ->setEnderecoCobranca('Rua do Bobos, 0 - São Paulo - SP');
print_r($clientePJ);