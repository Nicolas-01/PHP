<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 7 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Resposta do Exercício 7</h1>
    <?php

    function Data(int $dia1, int $mes1, int $ano1, int $dia2, int $mes2, int $ano2): void
    {
        // A função checkdate() verifica se a data informada é válida
    
        if (checkdate($mes1, $dia1, $ano1)) {
            if (checkdate($mes2, $dia2, $ano2)) {

                //new DateTime("$ano1-$mes1-$dia1") cria um objeto DateTime a partir dos valores fornecidos para o ano, mês e dia, representando a primeira data.
                $data1 = new DateTime("$ano1-$mes1-$dia1");
                $data2 = new DateTime("$ano2-$mes2-$dia2");

                // Calcula a diferença entre as duas datas
                $intervalo = $data1->diff($data2);
                //$data1->diff($data2) calcula a diferença entre a primeira e a segunda data e retorna um objeto "DateInterval" com as informações sobre a diferença.
    
                echo "A diferença entre as duas datas é de " . $intervalo->days . " dias.";

            } else
                echo "A Segunda Data é inválida!";
        } else
            echo "A Primeira Data é inválida!";

    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $dia1 = $_POST['dia1'];
            $mes1 = $_POST['mes1'];
            $ano1 = $_POST['ano1'];

            $dia2 = $_POST['dia2'];
            $mes2 = $_POST['mes2'];
            $ano2 = $_POST['ano2'];

            Data($dia1, $mes1, $ano1, $dia2, $mes2, $ano2);

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