<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>oficina o hallyson</h1>
        <form action="processar.php" method="post">


     
    <table border="10">
        <tr>
            <th>item</th>
            <th>quantidade</th>
        </tr>
        <tr>
            <td>Pneu</td>
            <td><input type="number" name="pneu" id="pneu" min="0" value="0"></td>

        </tr>
        <tr>
            <td>Ólio</td>
            <td><input type="number" name="oleo" id="oleo" min="0" value="0"></td>

        </tr>
        <tr>
            <td>Vela</td>
            <td><input type="number" name="vela" id="vela" min="0" value="0"></td>

        </tr>
          </form>
    
    
     </table>
    <input type= "submit" value="Enviar" >

</body>
</html>