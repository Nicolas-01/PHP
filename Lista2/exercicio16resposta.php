<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 16 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Resposta do Exercício 16</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];


            $desconto = $valor1 - ($valor1 * $valor2 / 100);
            $desconto_formatado = number_format($desconto, 2);
            
            echo "R$ $valor1 com $valor2 % de desconto é R$ $desconto_formatado.";

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>