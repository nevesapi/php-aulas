<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Metodo Get</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="text-center">Trabalhando com o POST</h1>
    <hr>
    <?php

    //capturando dados
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $mensagem = $_POST["mensagem"];
    $interesses = $_POST["interesses"] ?? [];
    // $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : [];
    var_dump($interesses);

    ?>

    <!-- Exibindo dados -->
    <h2 class="text-center">Informações do usuário: </h2>
    <ul class="list-group w-50">
      <li class="list-group-item list-group-item-action">Nome: <?= $nome ?></li>
      <li class="list-group-item list-group-item-action">Email: <?= $email ?></li>
      <li class="list-group-item list-group-item-action">Idade: <?= $idade ?></li>
      <li class="list-group-item list-group-item-action">Mensagem: <?= $mensagem ?></li>

      <!-- convertendo o array em string -->
      <li class="list-group-item list-group-item-action">Interesses: <?= implode(", ", $interesses) ?></li>

      <li class="list-group-item list-group-item-action">Interesses | usando o <code>foreach</code>:

        <ul class="list-group w-75">
          <?php foreach ($interesses as $interesse) { ?>
            <li class="list-group-item list-group-item-action">Interesse: <?= $interesse ?></li>
          <?php } ?>
        </ul>
      </li>


    </ul>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>