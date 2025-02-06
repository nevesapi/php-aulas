<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>06 - Operadores Lógicos</title>
  <style>
    body {
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <h1>06 - Operadores Lógicos</h1>
  <hr>

  <h2>&& (E/AND)</h2>
  <?php
  $media = 9.5;
  $faltas = 10;
  ?>

  <?php
  if ($media >= 7 && $faltas <= 10) {
  ?>
    <p>Aprovado</p>
  <?php
  } else {
  ?>
    <p>Reprovado</p>
  <?php
  }
  ?>


  <hr>
  <h2>|| (OU/OR)</h2>
  <?php
  $clienteVip = true;
  $cupom = false;

  if ($clienteVip || $cupom) {
  ?>
    <p>Desconto aprovado</p>
  <?php
  } else {
  ?>
    <p>Não possui desconto</p>
  <?php
  }
  ?>

  <hr>


  <h2>! (NÃO/NOT)</h2>
  <?php
  $user = false;

  if (!$user) {
  ?>
    <p><a href=''>Faça login primeiro</a></p>
  <?php
  } else {
  ?>
    <p>Seja bem vindo</p>
  <?php
  }
  ?>


  <?php
  $idade = 16;
  $acompanhadoDosPais = true;
  $estaBebado = true;

  if (($idade >= 18 || $acompanhadoDosPais) && !$estaBebado) {
  ?>
    <p>Pode entrar kkkkkkkk</p>
  <?php
  } else {
  ?>
    <p>Não pode entrar kkkkkkkk</p>
  <?php
  }
  ?>

</body>

</html>