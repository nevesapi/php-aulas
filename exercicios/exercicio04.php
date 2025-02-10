<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 04 - Loop e Estrutura de Dados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <h1 class="text-center">Exercício 04 - Loop e Estrutura de Dados</h1>
  <hr>
  <div class="container d-flex flex-column align-items-center justify-content-center ">
    <?php
    $dados = [
      "HTML" => "Estruturação",
      "CSS" => "Estilos",
      "JS" => "Comportamentos",
      "PHP" => "Back-End",
      "SQL" => "Manipulação de dados",
      "Java" => "Softwares"
    ];
    ?>
    <table class="table table-striped-columns table-hover w-50">
      <thead class="table-success">
        <tr>
          <th>ID</th>
          <th>Linguagem</th>
          <th>Descrição</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($dados as $key => $value) {
        ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
          </tr>
        <?php
          $i++;
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>