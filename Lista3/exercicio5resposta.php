<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 5 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Resposta do Exercício 5</h1>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $numero = $_POST['valor1'];

            switch ($numero) {
                case 1:
                    echo "O número $numero é o mês de Janeiro";
                    break;

                case 2:
                    echo "O número $numero é o mês de Fevereiro";
                    break;

                case 3:
                    echo "O número $numero é o mês de Março";
                    break;

                case 4:
                    echo "O número $numero é o mês de Abril";
                    break;

                case 5:
                    echo "O número $numero é o mês de Maio";
                    break;

                case 6:
                    echo "O número $numero é o mês de Junho";
                    break;

                case 7:
                    echo "O número $numero é o mês de Julho";
                    break;

                case 8:
                    echo "O número $numero é o mês de Agosto";
                    break;

                case 9:
                    echo "O número $numero é o mês de Setembro";
                    break;

                case 10:
                    echo "O número $numero é o mês de Outubro";
                    break;

                case 11:
                    echo "O número $numero é o mês de Novembro";
                    break;

                case 12:
                    echo "O número $numero é o mês de Dezembro";
                    break;

                default:
                    echo "Nenhuma das opções.";
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