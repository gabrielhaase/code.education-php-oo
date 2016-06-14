<?php
//------------------------------------------------------------------------------------------------------------
require_once('Cliente.php');
require_once('db-clientes.php');
//------------------------------------------------------------------------------------------------------------
$clientes = array();

foreach($listaClientes AS $cliente) {
    $clientes[] = new Cliente($cliente['nome'], $cliente['cpf'], $cliente['endereco']);
}
//------------------------------------------------------------------------------------------------------------
$ordemExibicao = $_GET['ordemExibicao'];
$ordemExibicao = ( isset($ordemExibicao) && !empty($ordemExibicao) ) ? $ordemExibicao : 'crescente';

if($ordemExibicao == 'crescente') {
    ksort($clientes);
} else {
    krsort($clientes);
}
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
                <h1>Cadastro de clientes<small> - Projeto Fase 1</small></h1>
            </div>
        </header>
        <section>
            <table class="table">
                <thead>
                    <tr>
                        <th><a href="?&ordemExibicao=<?php echo $ordemExibicao == 'crescente' ? 'descrescente' : 'crescente'; ?>">#</a></th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Endereço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes AS $key=>$cliente) : ?>
                        <?php $dataCliente = $cliente->getData(); ?>
                        <tr>
                            <td><?php echo $key; ?></td>
                            <td><a href="detalhes.php?id=<?php echo $key;?>" title="Clique para visualizar"><?php echo $dataCliente['nome']; ?></a></td>
                            <td><?php echo $dataCliente['cpf']; ?></td>
                            <td><?php echo $dataCliente['endereco']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>                
            </table>
        </section>
    </body>
</html>