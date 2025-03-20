<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 5</h1>
    <p>Informe os dados de 5 livros</p>

    <form action="exercicio5resposta.php" method="post">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <div class="mb-3">
                <input type="text" name="titulo[]" placeholder="<?= ($i + 1) ?>° Título" />
                <input type="number" name="qtdEstoque[]" placeholder="<?= ($i + 1) ?>° Qtd em Estoque" min="0" />
            </div>
            <br />
        <?php endfor; ?>

        <div class="row mt-2">
            <div class="col">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>