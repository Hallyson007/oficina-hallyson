<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="principal.css">
</head>
<body>
    <h1>oficina o hallyson</h1>
        <form action="processar.php" method="post">


     
    <table>
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
    
          </tr>
          <tr>
              <td>como você nos achou ? </td>
               <td><select name="achar" id="achar">
                <option value="a">sou cliete</option>
                <option value="b">anúcio de tv</option>
                <option value="c">telefone</option>
                <option value="d">boca boca</option>
              </select></td>
                
              
  
          </tr>
     </table>
    <input type= "submit" value="Enviar" >

</body>
</html>