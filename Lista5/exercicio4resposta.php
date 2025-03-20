<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 4 Resposta</h1>
    <p>Valor após 15% de imposto</p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $item = array();
            $nomes = $_POST['nome'];
            $precos = $_POST['preco'];

            for ($i = 0; $i < count($nomes); $i++) {
                $nome = $nomes[$i];
                $preco = $precos[$i];

                $precoImposto = $preco + ($preco * 15 / 100);

                $item[$nome] = $precoImposto;
            }

            // Ordenando os produtos pelo preço
            asort($item);

            foreach ($item as $nome => $precoImposto) {
                echo "<p>Item: $nome, Preço com imposto: R$ " . number_format($precoImposto, 2, ',', '.') . "</p>";
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