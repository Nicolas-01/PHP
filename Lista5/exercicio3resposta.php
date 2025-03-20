<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 3 Resposta</h1>
    <p>Se o produto for mais de R$ 100.00, terá desconto de 10%</p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $produto = array();
            $codigos = $_POST['codigo'];
            $nomes = $_POST['nome'];
            $precos = $_POST['preco'];

            for ($i = 0; $i < count($codigos); $i++) {
                $nome = $nomes[$i];
                $codigo = $codigos[$i];
                $preco = $precos[$i];

                if ($preco > 100) {
                    $preco -= $preco * 10 / 100;
                }

                $produto[$codigo] = [
                    'nome' => $nome,
                    'preco' => $preco
                ];
            }

            // Ordenando os produtos pelo nome
            asort($produto);

            foreach ($produto as $codigo => $produto) {
                echo "Código: $codigo, ", "Produto:" . $produto['nome'] . ", Preço R$: " . number_format($produto['preco'], 2, ',', '.') . "<br>";
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