<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 7</h1>

    <p>Digite duas datas para verificar a diferença de dias entre elas.</p>

    <form method="POST" action="exercicio7resposta.php">

        <h3>Primeira Data</h3>

        <div class="mb-3">
            <label for="dia1" class="form-label">Dia:</label>
            <input type="number" id="dia1" name="dia1" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="mes1" class="form-label">Mês (número):</label>
            <input type="number" id="mes1" name="mes1" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="ano1" class="form-label">Ano:</label>
            <input type="number" id="ano1" name="ano1" class="form-control" required="">
        </div>

        <h3>Segunda Data</h3>

        <div class="mb-3">
            <label for="dia2" class="form-label">Dia:</label>
            <input type="number" id="dia2" name="dia2" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="mes2" class="form-label">Mês (número):</label>
            <input type="number" id="mes2" name="mes2" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="ano2" class="form-label">Ano:</label>
            <input type="number" id="ano2" name="ano2" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>