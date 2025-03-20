<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercício 2</h1>
    <p>Informe o nome e 3 notas dos alunos</p>
    <form action="exercicio2resposta.php" method="post">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <div class="mb-3">
                <input type="text" name="nome[]" placeholder="<?= ($i + 1) ?>° Nome" />

                <!-- As notas são enviadas como subarrays -->
                <input type="number" name="nota[<?= $i ?>][0]" placeholder="1° Nota" min="0" max="10" step="0.1" required />
                <input type="number" name="nota[<?= $i ?>][1]" placeholder="2° Nota" min="0" max="10" step="0.1" required />
                <input type="number" name="nota[<?= $i ?>][2]" placeholder="3° Nota" min="0" max="10" step="0.1" required />
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