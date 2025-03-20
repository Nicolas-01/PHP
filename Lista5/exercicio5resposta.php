<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 5 Resposta</h1>
    <p>Valor após 15% de imposto</p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $livro = array();
            $titulos = $_POST['titulo'];
            $qtdes_estoque = $_POST['qtdEstoque'];

            for ($i = 0; $i < count($titulos); $i++) {
                $titulo = $titulos[$i];
                $qtd_estoque = $qtdes_estoque[$i];

                $livro[$titulo] = $qtd_estoque;
            }

            // Ordenando os produtos pelo titulo
            ksort($livro);

            foreach ($livro as $titulo => $qtd_estoque) {
                if ($qtd_estoque < 5) {
                    echo "<p>Título: '$titulo', Quantidade em Estoque: $qtd_estoque unidades. (Estoque baixo, menos de 5 unidades).</p>";
                } else {
                    echo "<p>Título: '$titulo', Quantidade em Estoque: $qtd_estoque unidades.</p>";
                }
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