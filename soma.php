<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Soma</title>
</head>
<body>
    <br>
    <h1 style="color: pink;">Somando</h1>
    <br>
    <form action="" method="get">
        <label for="n1">Insira o valor 1:</label>
        <input type="number" name="n1" id="n1">

        <label for="n2">Insira o valor 2</label>
        <input type="number" name="n2" id="n2">

        <button type="submit" class="btn btn-outline-primary">Calcular</button>

    </form>
    <?php
    
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];

        $soma = $n1 + $n2;

        if($soma > 20){
            $r8 = $soma + 8;
            echo "A soma dos dois números é: $soma, e acrescentando 8 é: $r8";
        }else{
            $r5 = $soma - 5;
            echo "A soma dos dois números é: $soma, e menos 5 é: $r5";
        }

    ?>
</body>
</html>