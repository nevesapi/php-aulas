<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>05 - Condicionais PHP </title>

  <style>
    p {
      font-size: 1.5rem;
    }

    .normal {
      color: rgb(25, 141, 77);
    }

    .comprar {
      color: rgb(141, 25, 25);
    }

    .urgente {
      color: rgb(141, 25, 25);
      background: #ffff00;
    }
  </style>
</head>

<body>
  <h1>Estruturas Condicionais - Refatorado</h1>
  <hr>

  <h2>Simples
    <h3><code>if</code></h3>
    <?php
    $numero = 5;
    if ($numero > 1) {
    ?>

      <p><?= $numero ?> é maior que 1</p>

    <?php
    }
    ?>

    <hr>


    <h2>Compostas
      <h3><code>if/else</code></h3>

      <?php
      $produto = "Ultrabook Asus";
      $qtdEmEstoque = 3;
      $qtdCritica = 5;
      ?>

      <h3>Produto: <?= $produto ?></h3>
      <h4>Quantidade em estoque:<?= $qtdEmEstoque ?></h4>

      <?php
      if ($qtdEmEstoque < $qtdCritica) {
      ?>
        <p class='comprar'>É necessário comprar!</p>

        <?php
        if ($qtdEmEstoque === 0) {
        ?>
          <p class='urgente'><strong>COMPRE IMEDIATAMENTE</strong></p>
        <?php
        }
      } else {
        ?>

        <p class='normal'>Estoque OK!</p>

      <?php
      };
      ?>
      <hr>

      <h2>Encadeada
        <h3><code>if/elseif/else</code></h3>

        <?php
        $idade = 60;
        ?>

        <?php
        if ($idade <= 12) {
        ?>
          <p>Criança</p>
        <?php
        } elseif ($idade <= 17) {
        ?>
          <p>Adolescente</p>
        <?php
        } elseif ($idade <= 59) {
        ?>
          <p>Adulto</p>
        <?php
        } else {
        ?>
          <p>Idoso</p>
        <?php
        }
        ?>
</body>

</html>