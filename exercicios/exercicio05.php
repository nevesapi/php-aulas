<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Exercicio 05 - Funções</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="text-center text-dark">Exercicio 05 - Funções</h1>
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

    // $valorCalcMedia = $calcularMedia(4, 4, 4);

    //função que verifica se o aluno está aprovado/reprovado  com base no valor da média
    function verificaSituacao(float $valorCalcMedia): string
    {
      if ($valorCalcMedia >= 7) {
        $situacao = "<p class='alert alert-success'>Você está aprovado(a). <b>Sua média é: $valorCalcMedia</b></p>";
      } else {
        $situacao = "<p class='alert alert-danger'>Você está reprovado(a). <b>Sua média é: $valorCalcMedia</b></p>";
      }
      return $situacao;
    }

    //echo pra veirificar a saída da função que verifica a situação do aluno
    // echo verificaSituacao($valorCalcMedia);
    
    $alunos = [
      "Denis"=>[10,7.5,6.3],
      "Tenis"=>[6.9,6.9,6.9],
      "Penis"=>[6,6,6],
      "Zenis"=>[10,10,10],
      "Menis"=>[10,10,10],
    ];
    
    // $keys = array_keys($alunos);

    // for ($i = 0; $i < count($keys); $i++) {
      // $aluno = $keys[$i];
      // $notas = $alunos[$aluno];
    ?>
    <div class="d-flex flex-wrap gap-3">
    <?php
    foreach ($alunos as $aluno => $notas) {
      $valorCalcMedia = $calcularMedia($notas[0], $notas[1], $notas[2]);
      ?>

      <div class="alert alert-warning flex-fill">
        <h3>Aluno(a): <?= $aluno?></h3>
        <p><?= verificaSituacao($valorCalcMedia)?></p>
      </div>
    <?php
    }
    ?>
    </div>

    <!-- <div class="situacao">
      <?=verificaSituacao($valorCalcMedia)?>
    </div> -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>