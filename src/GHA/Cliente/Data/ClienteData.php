<?php
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
namespace GHA\Cliente\Data;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------
use GHA\Cliente\Type\ClientePF;
use GHA\Cliente\Type\ClientePJ;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------

class ClienteData {
    
    private $dbConnection;
    
    public function __construct($pdo) {
        $this->dbConnection = $pdo;
    }
    
    function getClientes($ordem = 'DESC') {
        $stmt = $this->dbConnection->prepare("SELECT * FROM clientes ORDER BY id {$ordem}");
        $stmt->execute();
        
        $clientData = $stmt->fetchAll();
        return $clientData;
    }
    
    function getCliente($id) {
        $stmt = $this->dbConnection->prepare("SELECT * FROM clientes WHERE id = {$id}");
        $stmt->execute();
        
        $clientData = $stmt->fetch();
        return $clientData;        
    }
}