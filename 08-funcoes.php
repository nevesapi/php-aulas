<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="text-center">Trabalhando com Funções</h1>
    <hr>

    <h2>Função como procedimento (ou sub-rotina)</h2>
    <p>Procedimentos <b>não retornam</b> nada.</p>s

    <?php
    function exibirDadosDoAutor()
    {
      echo "<h3>Teste</h3>";
      echo "<p><time>" . date("d/m/Y") . "</time></p>";
    }
    ?>

    <div>
      <?= exibirDadosDoAutor(); ?>
    </div>

    <hr>

    <h2>Função com para parâmetros (ou argumentos)</h2>
    <?php
    function somar($valor1, $valor2)
    {
      return $valor1 + $valor2;
    }
    ?>

    <p>Resultado 1 - <strong><?= somar(10, 5) ?></strong></p>
    <p>Resultado 2 -<strong> <?= somar(23, 10) ?></strong></p>

    <?php
    $resultado3 = somar(6, 5);
    ?>
    <p>Resultado 3.1 -<strong> <?= $resultado3 ?></strong></p>

    <?php if ($resultado3 > 10) { ?>
      <p class="alert alert-success">O Resultado 3 é maior que 10</p>
    <?php } else { ?>
      <p class="alert alert-danger">O Resultado 3 é menor que 10</p>
    <?php } ?>

    <hr>

    <h2>Usando uma função como parte de uma condição</h2>
    <?php if (somar(5, 2) > 10) { ?>
      <p class="alert alert-success">O Resultado 3 é maior que 10</p>
    <?php } else { ?>
      <p class="alert alert-danger">O Resultado 3 é menor que 10</p>
    <?php } ?>

    <hr>

    <h3>Função com parâmetros opcionais</h3>
    <?php
    function exibirSaudacao($mensagem, $pessoa = "")
    {
      return "Olá, $mensagem $pessoa!";
    }
    ?>
    <p class="alert alert-success">Mensagem 1 - <?= exibirSaudacao("Bom dia", "Denis") ?></p>
    <p class="alert alert-success">Mensagem 1 - <?= exibirSaudacao("Bom dia") ?></p>

    <hr>

    <h2>Indução de tipos de dados</h2>
    <?php
    function verificarNumeroNegativo(int $valor): string
    {
      if ($valor < 0) {
        return  "É negativo";
      }

      return "Não é negativo";
    }
    ?>

    <?php
    function verificarNumero(int $valor): string
    {
      return $valor < 0 ? "É negativo" : "Não é negativo";
    }
    ?>

    <!-- tipos comuns para uso com indição
     
    string
    int
    float
    array
    object

    -->

    <p>Número 10: <?= verificarNumeroNegativo(10) ?></p>
    <p>Número -10: <?= verificarNumeroNegativo(-10) ?></p>
    <p>Teste de valor/parâmetro errado: <?= verificarNumeroNegativo(0) ?></p>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>