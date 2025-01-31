<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    hr,
    h2 {
      margin: 1rem 0;
    }
  </style>
</head>

<body>
  <?php
  $curso = 'PHP';
  $ano = 2025;
  $preço = 2550.52;

  echo "<h2>Saída de dados usando echo na sintaxe COMPLETA</h2>";

  echo "<p>Estamos no curso de $curso no ano letivo de $ano </p>";
  ?>

  <hr>
  <h2>Saída de dados usando echo na sintaxe Abreviaduda/curta</h2>
  <p>Estamos no curso de <?= $curso ?> no ano letivo de <?= $ano ?> </p>

  <hr>

  <?php
  // Constantes

  define("MEU_NOME", "Denis");
  const SEU_NOME = "MEU NÃO";
  ?>

  <h2>Saída de dados constantes</h2>
  <p>Meu nome é <?= MEU_NOME ?></p>

  <h2>Sintaxe heredoc e nowdoc</h2>
  <p><i>Úteis para strings de multiplas linhas</i></p>

  <?php

  $nome = "Denis";
  $comida = "Lasanha";

  $textoHeredoc = <<<TEXTO
    <ul>
      <li>Nome: $nome</li>
      <li style="color:red">Texto com CSS</li>
    </ul>
  TEXTO;

  $textoNowdoc = <<<'TEXTO'
    <ul>
      <li>Comida: $comida</li>
      <li style="color:red">Texto com CSS</li>
    </ul>
  TEXTO;

  ?>

  <div>
    <h3>Saída com HereDoc</h3>
    <?= $textoHeredoc ?>
  </div>

  <div>
    <h3>Saída com NowDoc</h3>
    <?= $textoNowdoc ?>
  </div>
</body>

</html>