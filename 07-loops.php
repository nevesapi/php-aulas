<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>07 - Loops</title>
  <style>
    body {
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <h1>Trabalhando com Loops</h1>
  <hr>

  <h2>WHILE (ENQUANTO)</h2>
  <p>Executa acções <b>enquanto a condição for verdadeira</b>. Se a condição inicialmente não é verdadera, o loop não funciona nenhuma vez.</p>

  <?php
  $i = 1;
  while ($i <= 3) {
  ?>
    <p>Indice: <?= $i ?></p>
  <?php $i++;
  } ?>
  <hr>

  <h2>DO/WHILE (parecido com o REPITA)</h2>
  <p>Repete <b>pelo menos uma vez</b> as ações e, caso a condição continue verdadeira, segue fazendo outros ciclos de repetição até a condição se tornar falsa.</p>
  <?php
  $a = 1;
  do {
  ?>
    <div>
      <h3>Titulo</h3>
      <p>Texto qualquer</p>
    </div>
  <?php
    $a++;
  } while ($a <= 3);
  ?>
  <hr>

  <h2>FOR (PARA)</h2>
  <p>Executa ações por uma <b>quantidade determinada</b> de vezes.</p>
  <?php
  for ($i = 0; $i < 3; $i++) {
  ?>
    <div>
      <h3>Titulo</h3>
      <p>Texto qualquer</p>
    </div>
  <?php
  }
  ?>
  <hr>
  <h2>Mini exercicio</h2>
  <?php
  $meses = array(
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
  );
  ?>
  <ol>
    <?php
    for ($i = 0; $i < count($meses); ++$i) {
    ?>
      <li><?= $meses[$i] ?></li>
    <?php
    }
    ?>
  </ol>
  <hr>
  <h2>FOREACH</h2>
  <p>Versão simplificada do loop for e bem mais simples e fácil de usar com arrays e objetos.</p>

  <?php
  $alunos = ["aluno" => "Denis", "Paulo", "Heloisa"];
  foreach ($alunos as $aluno) {
  ?>
    <p>Aluno: <?= $aluno ?></p>
  <?php
  }
  ?>
</body>

</html>