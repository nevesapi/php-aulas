<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 04 (Loop e Estrutura de Dados)</title>
  <style>
    body {
      font-family: sans-serif;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <h1>Exercício 04 (Loop e Estrutura de Dados)</h1>
  <hr>
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

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
      </tr>
    </thead>

    <tbody>
      <?php
      foreach ($dados as $key => $value) {
      ?>
        <tr>
          <td>1</td>
          <td><?= $key ?></td>
          <td><?= $value ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>

</html>