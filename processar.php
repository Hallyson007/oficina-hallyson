<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oficina hallyson</title>
</head>
<body>
    <h1>Oficina</h1>
    <h2>Pedidos</h2>
    <?php
    
    $pneu = $_POST['pneu'];
    
    $oleo = $_POST['oleo'];
    
    $vela = $_POST['vela'];
    
    $valortotal = 0.00;
    
    $qtdtotal = 0;
    
    define ('PRECOPNEU', 100);

    define ('PRECOOLEO', 10);

    define ('PRECOVELA', 4);

    $valortotal = ($pneu*PRECOPNEU) + ($oleo * PRECOOLEO) + ($vela*PRECOVELA); 

    echo '<p> Pedido Processado ás :'.date('H:i - d/m/y').'</p>';
    
   
    
    $qtdtotal = $pneu + $oleo + $vela;
    if ($qtdtotal ==0) {
    
        echo 'você nao pediu nada. <br>' ;
    } else { echo $pneu .' pneus <br>';
    
        echo $oleo .' galões <br>';
        
        echo $vela .' velas <br>';
        }
        
        echo 'A quantidade total é :'.$qtdtotal.'<br>';
    
    echo 'O valor total é R$: '.number_format($valortotal,2,",",".");
    $taxa = 0.22 ; // lucru presumido
    $valortotal = $valortotal + (1+ $taxa);
     echo 'O valor total é R$: '.number_format($valortotal,2,",",".");   
 ?>
 
    <p><a  href="index.php">Voltar</a></p>










</body>
</html>