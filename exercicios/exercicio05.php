<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Exercicio 05 - Funções</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Exercicio 05 - Funções</h1>
    <hr>

    <?php

    //função anônima para calcular e formatar a média
    $calcularMedia = function (float $nota1, float $nota2, float $nota3): float {
      $somaDasNotas = $nota1 + $nota2 + $nota3;
      $calcMedia = $somaDasNotas / 3;

      //formatando a média das notas
      $calcMediaFormatado = number_format($calcMedia, 2);

      return $calcMediaFormatado;
    };

    $valorCalcMedia = $calcularMedia(8, 8, 8);

    function verificaSituacao(float $valorCalcMedia): string
    {
      if ($valorCalcMedia >= 7) {
        return "Aprovado";
      } else {
        return "Reprovado";
      }
    }
    verificaSituacao($valorCalcMedia);

    ?>

    <p class="alert alert-success">Você está <?= verificaSituacao($valorCalcMedia) ?></p>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>