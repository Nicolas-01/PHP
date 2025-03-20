<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 2 Resposta</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $aluno = array();
            $nomes = $_POST['nome'];
            $notas = $_POST['nota'];

            // loop para ler os valores do form.
            // count é uma função que conta o número de elementos (é como se fosse a função len)
            for ($i = 0; $i < count($notas); $i++) {
                $nome = $nomes[$i];
                $nota1 = $notas[$i][0];
                $nota2 = $notas[$i][1];
                $nota3 = $notas[$i][2];
                $media = ($nota1 + $nota2 + $nota3) / 3;

                echo "<p>Aluno: $nome, Média: " . number_format($media, 2) . "</p>";
            }
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