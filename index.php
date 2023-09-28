<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio IMC</title>
</head>

<body>
    <form action="">
        digite o peso:
        <input type="text" name="peso">
        <br><br>
        digite a altura:
        <input type="text" name="altura">
        <br><br>

        <input type="submit">
        <br><br>
    </form>
    <?php
    if (isset($_GET['peso']) and isset($_GET['altura'])) {
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];

        echo "O seu peso é: $peso kg <br>";
        echo "A sua altura é: $altura m";

        $alturaFinal = $altura ** 2;
        $imc = $peso / $alturaFinal;
        echo "<br>";
        echo "Seu IMC é: $imc <br><br>";

        if($imc < 18.5){
            echo "Abaixo do peso";
        } else if($imc > 18.5 and $imc < 24.9){
            echo "Saudável";
        } else if($imc > 25 and $imc < 29.9){
            echo "Sobrepeso";
        } else if($imc > 30 and $imc < 35.9){
            echo "Obesidade I";
        } else if($imc > 36 and $imc < 39.9){
            echo "Obesidade II";
        } else {
            echo "Obesidade mórbida";
        }
    }




    ?>
</body>

</html>