<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Exercício 1</h1>

    <form method="post" action="exercicio1resposta.php">

        <p>Digite 7 números diferentes para verificar qual é o menor</p>

        <div class="mb-3">
            <label for="numero1" class="form-label">Número 1:</label>
            <input type="number" id="numero1" name="numero1" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="numero2" class="form-label">Número 2:</label>
            <input type="number" id="numero2" name="numero2" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="numero3" class="form-label">Número 3:</label>
            <input type="number" id="numero3" name="numero3" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="numero4" class="form-label">Número 4:</label>
            <input type="number" id="numero4" name="numero4" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="numero5" class="form-label">Número 5:</label>
            <input type="number" id="numero5" name="numero5" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="numero6" class="form-label">Número 6:</label>
            <input type="number" id="numero6" name="numero6" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="numero7" class="form-label">Número 7:</label>
            <input type="number" id="numero7" name="numero7" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>