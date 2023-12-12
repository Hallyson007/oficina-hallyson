<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina O  Chicão</title>
</head>
<body>
    <h1>Oficina </h1>
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

 echo '<p> Pedido Processado ás :'.date('H:i, d/m/y').'</p>';
 
 
 $qtdtotal = $pneu + $oleo + $vela;
if ($qtdtotal == 0) {
    echo 'Você não pediu nada na página anterior <br>' ;
} else {
    echo $pneu .' pneus <br>';
    echo $oleo .' galões <br>';
    echo $vela .' velas <br>';
}

 echo 'A quantidade total é :'.$qtdtotal.'<br>';
 echo 'O subtotal é de R$: '.number_format($valortotal,2,",",".");
 $taxa = 0.22; //lucro presumido
 $valortotal = $valortotal * (1 + $taxa);
if ($pneu < 10) {
    $desconto = 0;
} elseif (($pneu >=10) && ($pneu <=49))  {
    $desconto = 0.05;
} elseif (($pneu >=50) && ($pneu <=99)) {
    $desconto = 0.10;
} elseif ($pneu >=100) {
    $desconto = 0.15;
} 
 echo 'O valor total com imposto é de R$: '.number_format($valortotal,2,",",".");
 $valortotal = $valortotal * (1 - $desconto);
 echo 'O valor total com desconto é de R$: '.number_format($valortotal,2,",",".");
?>
</body>
</html>