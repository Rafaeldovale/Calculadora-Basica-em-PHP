<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Basica</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="number" step= "0.01" name="n1"><br>
        <input type="number" step="0.01" name="n2"><br>
        
        <div>
           <input type="radio" id = "somar" value="somar" name="Calc">Somar<br>
           <input type="radio" id = "subtrair" value="subtrair" name ="Calc">Subtrair<br>
           <input type="radio" id = "dividir" value="dividir" name= "Calc">Dividir<br>
           <input type="radio" id="multiplicar" value="multiplicar" name= "Calc">Multiplicar<br>
        </div>
        <button>Calcular</button>
    </form>
    <?php

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $operacao = $_POST['Calc'];

       if($_POST['Calc'] == 'somar'){
        $somar = $n1 + $n2;
        echo $somar;
       }
       if($_POST['Calc'] == 'subtrair'){
        $subtrair = $n1 - $n2;
        echo $subtrair;
       }
       if($_POST['Calc'] == 'dividir'){
        $dividir = $n1 / $n2;
        echo $dividir;
       }
       if($_POST['Calc'] == 'multiplicar'){
        $multiplicar = $n1 * $n2;
        echo $multiplicar;
       }
    ?>
</body>
</html>