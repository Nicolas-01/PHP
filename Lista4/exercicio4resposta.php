<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Resposta do Exercício 4</h1>
    <?php

    function intData(int $dia, int $mes, int $ano): void
    {
        if (checkdate($mes, $dia, $ano)) {
            // A função checkdate() verifica se a data informada é válida
            echo "Data válida: $dia/$mes/$ano";
        } else {
            echo "Data inválida!";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];
            intData($dia, $mes, $ano);
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