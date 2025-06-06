<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 18</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 18</h1>

    <form method="post" action="exercicio18resposta.php">
        <div class="mb-3">
            <label for="valor1" class="form-label">Insira um capital (R$):</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required step="0.01">
        </div>

        <div class="mb-3">
            <label for="valor2" class="form-label">Insira uma taxa de juros (% ao ano):</label>
            <input type="number" id="valor2" name="valor2" class="form-control" required step="0.01">
        </div>

        <div class="mb-3">
            <label for="valor3" class="form-label">Insira um período (em meses):</label>
            <input type="number" id="valor3" name="valor3" class="form-control" required step="0.01">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>