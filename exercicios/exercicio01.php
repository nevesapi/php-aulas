<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $data = date("d/m/Y");
  $nome = "Denis";
  $curso = "Técnico de informatica para Internet";

  $cargaHoraria = 1200;
  $limiteDeFaltas = 1200 * 0.25;

  $textoHeredoc = <<<TEXTO
  <ul>
    <li>Curso: $curso</li>
    <li style="color:red">Carga Horária: <strong>$cargaHoraria</strong>h</li>
    <li style="color:green">Limite de faltas: <strong>$limiteDeFaltas</strong>h</li>
  </ul>
  TEXTO;
  ?>

  <h2>Seja bem vindo(a) <?= $nome ?> | <?= $data ?></h2>
  <div>
    <h3>informações do curso: </h3>
    <?= $textoHeredoc ?>
  </div>
</body>

</html>