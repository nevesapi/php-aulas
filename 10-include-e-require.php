<?php require "recursos.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | 10 - Include e Require</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>10 - Include e Require</h1>
    <p>Modulariazação e Inclusão de recursos</p>

    <hr>

    <h2><?= ESCOLA ?></h2>
    <p>Estamos fazendo o curso de <?= $curso ?></p>

    <ul class="list-group  w-25">
      <?php foreach ($tecnologias as $tecnologia) { ?>
        <li class="list-group-item list-group-item-info"><?= $tecnologia ?></li>

      <?php } ?>
    </ul>

    <hr>
    <p class="bg-success p-2 text-white bg-opacity-75 rounded-2">O aluno Ciclano tem 25 anos e é <?= verificarIdade(20) ?>de idade!</p>

    <article>
      <h2>Titulo qualquer ...</h2>
      <?php include "textos.php" ?>
    </article>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>