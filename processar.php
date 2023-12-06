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
    $pneu = $_POST["pneu"];
    $olio = $_POST["olio"];
    $vela = $_POST["vela"];
    echo '<p> pedido precessado as: ' . date ('H:i - d/m/y') .'</p>';
    
        echo $pneu .' pneus <br>'. $olio .' galões <br>'. $vela .' velas <br>'; 
 
 ?>
 <a href="index.php">Voltar</a>
</body>
</html>