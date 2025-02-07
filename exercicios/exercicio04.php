<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 04 - Loop e Estrutura de Dados</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: sans-serif;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    table {
      width: 100%;
      max-width: 50%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 12px 15px;
      text-align: left;
      border: 1px solid #ddd;
    }

    th {
      background-color: rgb(76, 127, 175);
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
      background-color: #ffffff;
    }

    tr:hover {
      background-color: #ddd;
    }
  </style>
</head>

<body>
  <h1>Exercício 04 - Loop e Estrutura de Dados</h1>
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

</body>

</html>