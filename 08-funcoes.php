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
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>