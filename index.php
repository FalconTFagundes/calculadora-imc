<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 320px;
        }

        h2 {
            margin-bottom: 15px;
            font-size: 22px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn {
            background: #ff4081;
            color: white;
            border: none;
            padding: 10px;
            font-size: 18px;
            width: 100%;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #e91e63;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Calculadora de IMC</h2>
        <form method="GET">
            <input type="text" step=".01" name="peso" placeholder="Digite seu peso (kg)">
            <input type="text" step=".01" name="altura" placeholder="Digite sua altura (m)">
            <button type="submit" class="btn">Calcular IMC</button>
        </form>

        <?php
        if (isset($_GET['peso']) && isset($_GET['altura'])) {
            $peso = $_GET['peso'];
            $altura = $_GET['altura'];

            if (is_numeric($peso) && is_numeric($altura) && $altura > 0) {
                $imc = $peso / ($altura * $altura);
                echo "<div class='result'>Seu IMC é: " . number_format($imc, 2) . "<br>";

                if ($imc < 18.5) {
                    echo "Abaixo do peso";
                } else if ($imc >= 18.5 && $imc < 24.9) {
                    echo "Saudável";
                } else if ($imc >= 25 && $imc < 29.9) {
                    echo "Sobrepeso";
                } else if ($imc >= 30 && $imc < 35.9) {
                    echo "Obesidade I";
                } else if ($imc >= 36 && $imc < 39.9) {
                    echo "Obesidade II";
                } else {
                    echo "Obesidade Mórbida";
                }
                echo "</div>";
            } else {
                echo "<div class='result' style='color: yellow;'>Por favor, insira valores válidos.</div>";
            }
        }
        ?>
    </div>
</body>

</html>