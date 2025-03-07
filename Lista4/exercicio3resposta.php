<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Resposta do Exercício 3</h1>
    <?php

    function stringPalavra(string $palavra1, string $palavra2): void
    {
        if (strpos($palavra1, $palavra2) !== false) {
            // A função strpos() encontra a posição de uma palavra (substring) dentro de outra palavra (string).
            // Ela retorna a posição da primeira letra onde a substring começa ou retorna false se não encontrar a palavra.
            echo "A palavra '$palavra2' está contida em '$palavra1'.\n";
        } else {
            echo "A palavra '$palavra2' não está contida em '$palavra1'.\n";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $palavra1 = $_POST['palavra1'];
            $palavra2 = $_POST['palavra2'];
            stringPalavra($palavra1, $palavra2);
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