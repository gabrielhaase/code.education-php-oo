<?php
//------------------------------------------------------------------------------------------------------------
require_once('Cliente.php');
require_once('db-clientes.php');
//------------------------------------------------------------------------------------------------------------
$idCliente = $_GET['id'];
$cliente = $clientes[$idCliente];
$dadosCliente = $cliente->getData();
//------------------------------------------------------------------------------------------------------------
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de clientes</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="page-header">
                <h1>Detalhes do cliente<small> - <?php echo $dadosCliente['nome']; ?></small></h1>
            </div>
        </header>
        <section>
            <ul class="list-group">
                <li>
                    <label>Nome: </label>
                    <?php echo $dadosCliente['nome']; ?>
                </li>
                <li>
                    <label>CPF: </label>
                    <?php echo $dadosCliente['cpf']; ?>
                </li>
                <li>
                    <label>Endereço: </label>
                    <?php echo $dadosCliente['endereco']; ?>
                </li>
            </ul>
            <hr>
            <button type="button" class="btn btn-primary" onclick="javascript: history.back();">Voltar</button>            
        </section>
    </body>
</html>