<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 03 - Condicionais</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: sans-serif;
      padding: 1rem;
    }

    hr {
      margin-bottom: 3rem;
    }

    p+p {
      margin: 1rem 0;
    }
  </style>
</head>

<body>
  <h1>Exercicio 03 - Trabalhando com condicionais</h1>
  <hr>
  <?php

  $valorDaCompra = 10000;
  if ($valorDaCompra >= 5000) {
    $desconto = 0.15;
  } elseif ($valorDaCompra >= 3000) {
    $desconto = 0.10;
  } elseif ($valorDaCompra >= 1000) {
    $desconto = 0.05;
  } else {
    $desconto = 0;
  }

  //Calculando o desconto e formatando o valor do desconto para saída
  $descontoInteiro = 100 * $desconto;
  $calculaDesconto = $valorDaCompra * $desconto;

  //Calculando o valor final da compra
  $valorFinalDaCompra = $valorDaCompra - $calculaDesconto;

  //Formatando o valor de said em reais 
  $valorFinalFormatado = number_format($valorFinalDaCompra, 2, ",", ".");
  $valorDaCompraFormatado = number_format($valorDaCompra, 2, ",", ".");
  $calculaDescontoFormatado = number_format($calculaDesconto, 2, ",", ".");
  ?>

  <p>Valor do produto: <strong>R$<?= $valorDaCompraFormatado ?></strong></p>
  <p>Valor do desconto em R$: <strong>R$<?= $calculaDescontoFormatado ?></strong></p>
  <p>Valor do desconto aplicado: <strong><?= $descontoInteiro ?>%</strong></p>
  <p>Valor final da compra:<strong> R$<?= $valorFinalFormatado ?></strong></p>
</body>

</html>