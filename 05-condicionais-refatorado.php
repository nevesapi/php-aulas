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

      echo "<h3>Produto: $produto</h3>";
      echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

      if ($qtdEmEstoque < $qtdCritica) {
        echo "<p class='comprar'>É necessário comprar!</p>";
        if ($qtdEmEstoque === 0) {
          echo "<p class='urgente'><strong>COMPRE IMEDIATAMENTE</strong></p>";
        }
      } else {
        echo "<p class='normal'>Estoque OK!</p>";
      }
      ?>
      <hr>

      <h2>Encadeada
        <h3><code>if/elseif/else</code></h3>

        <?php
        $idade = 60;

        if ($idade <= 12) {
          echo "<p>Criança</p>";
        } elseif ($idade <= 17) {
          echo "<p>Adolescente</p>";
        } elseif ($idade <= 59) {
          echo "<p>Adulto</p>";
        } else {
          echo "<p>Idoso</p>";
        }

        ?>
</body>

</html>