<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Soma | PHP</title>
</head>
<body>
    <h1>Soma de números</h1>

<form action="" method="get">

    <label for="Numero1">1º número: </label>
    <input type="number" name="Numero1" id="Numero1">
    <br><br>
    <label for="Numero2">2º número: </label>
    <input type="number" name="Numero2" id="Numero2">
    <br><br>
    <label for="Numero3">3º número: </label>
    <input type="number" name="Numero3" id="Numero3">
    <br><br>
    <input type="submit" value="Envie" class="btn btn-outline-primary">

</form>

<?php

    if(isset($_GET['Num1']) && isset($_GET['Num2']) && isset($_GET['Num3'])) {
        
        $n1 = $_GET['Num1'];
        $n2 = $_GET['Num2'];
        $n3 = $_GET['Num3'];
    
        
        function comparar($a, $b) {
            return $b - $a;
        }
    
        
        $numeros = array($n1, $n2, $n3);
    
        
        usort($numeros, 'comparar');
    
        
        echo "<br>Em ordem decrescente: ";
        foreach ($numeros as $numero) {
            echo "$numero ";
        }
    }

?>

</body>
</html>