<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>investe mundo: Calculadoras financeiras</title>
    <link rel="icon" href="IM.png" type="image/x-icon">
     <link rel="stylesheet" href="block.css">
</head>
<body>
    <h1>Calculadoras financeiras</h1>
    <nav class="hotel">
        <a href="index.html">Home</a>
        <a href="acoes.html">Ações</a>
        <a href="fundoimobiliario.html"> Fundos imobiliários</a>
        <a href="fundos.html">Fundos de investimento</a>
        <a href="dividendos.html">Dividendos</a>
        <a href="code.php">Calculadoras financeiras</a>
    </nav>
    <form method="post">
        <br>
        <h2>Calculadora de juros compostos em anos</h2>
        <br>
        <label for ='book'>Valor total:</label>
        <input class='a' id="book" type="text" name="book" required>
        <br>
        <br>
        <label for ='look'>Taxa de juros:</label>
        <input class='b' id="look" type="text" name='look' required>
        <br>
        <br>
        <label for ='water'>Período em:</label>
        <input class="c" id="water" type="text" name='water' required>
        <br>
        <br>
               <details>
        <summary>Período em:</summary>
         <a class = 'passpart' href="code.php">meses</a>
    </details> 
    <br>
       <button onclick="back()">Calcualar</button>
    </form>
    <br>
    <?php 
  if($_SERVER["REQUEST_METHOD"] == "POST"){   
    #Formato de Request_method para pegar elementos do html com: if ($_SERVER[REQUEST_METHOD]=="POST"){}
    $value = $_POST["book"];
    $juros = $_POST["look"];
    $tempo = $_POST["water"];
    $month = $tempo *12;
    $Rest = ($juros/100);
    $juros = (1 + $Rest) ** $month;
    $like = $value * ($juros);
    $casas_deciamis = 2; 
    $apache =  number_format($like, $casas_deciamis, ".","");
   # A propriedade number_format serve para executar até uma casa decimal
    echo '<div class="api">'.'Seu valor total com juros é de:'.$apache.'R$'.'</div>'; 
    #Assim pode-se colocar elementos no centro e devemos colocar com aspas dusplas na class  e em cada elemento de entrade de abertura e fechamento da div aspas simples com por ex.:'<div>'echo '<div class="api">'.$apache.'</div>'; 
    #Concatenação com ponto
    #para colocar html dentro do php deve-se colocar como string!
  }
 
?>
<br>
<br>
    <footer>
        <a class="teorema" href="pol.html">Política de privacidade</a>
        <p class="time">®Investe Mundo</p>
    </footer>
</body>
</html> 
 