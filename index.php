<?php
//------------------------------------------------------------------------------------------------------------
require_once('ClienteImportanciaInterface.php');
require_once('ClientePFInterface.php');
require_once('ClientePJInterface.php');
require_once('Cliente.php');
require_once('ClientePF.php');
require_once('ClientePJ.php');
require_once('ClienteData.php');

//------------------------------------------------------------------------------------------------------------
$ordemExibicao = $_GET['ordemExibicao'];
$ordemExibicao = ( isset($ordemExibicao) && !empty($ordemExibicao) ) ? $ordemExibicao : 'ASC';

//------------------------------------------------------------------------------------------------------------
$dadosClientes = new ClienteData();
$clientes = $dadosClientes->getData($ordemExibicao);

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
                <h1>Cadastro de clientes<small> - Projeto Fase 2</small></h1>
            </div>
        </header>
        <section>
            <table class="table">
                <thead>
                    <tr>
                        <th><a href="?&ordemExibicao=<?php echo $ordemExibicao == 'ASC' ? 'DESC' : 'ASC'; ?>">#</a></th>
                        <th>Tipo cliente</th>
                        <th>Importância</th>
                        <th>Nome</th>
                        <th>CPF/CNPJ</th>
                        <th>Endereço</th>
                        <th>Endereço de cobrança</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes AS $key=>$cliente) : ?>
                        <tr>
                            <td><?php echo $key; ?></td>
                            <td><?php echo $cliente->getTipoCliente()=='PF' ? "Pessoa física" : 'Pessoa jurídica'; ?></td>
                            <td>
                                <?php for( $i=1; $i<=5; $i++ ): ?>
                                    <?php if($i <= $cliente->getImportancia()):?>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <?php else :?>
                                        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </td>
                            <td><a href="detalhes.php?id=<?php echo $key;?>" title="Clique para visualizar"><?php echo $cliente->getNome(); ?></a></td>
                            <td><?php echo $cliente->getTipoCliente()=="PF" ? $cliente->getCpf() : $cliente->getCnpj(); ?></td>
                            <td><?php echo $cliente->getEndereco(); ?></td>
                            <td><?php echo $cliente->getTipoCliente()=="PJ" ? $cliente->getEnderecoCobranca() : ''; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>                
            </table>
        </section>
    </body>
</html>
