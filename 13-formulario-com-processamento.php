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
    <h1 class="text-center">Formulário e processamento combinados</h1>
    <hr>

    <?php
    if (isset($_POST["enviar"])) {
      $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    ?>

      <section>
        <h2>Dados</h2>
        <p>Nome: <?= $nome ?></p>
        <p>Nome: <?= $email ?></p>
      </section>

    <?php } else { ?>

      <form action="" method="post" class="w-50 bg-danger-subtle p-3 rounded-2">

        <div class="mb-3">
          <label for="nome" class="form-label">Nome: </label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email: </label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
      </form>

    <?php } ?>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>