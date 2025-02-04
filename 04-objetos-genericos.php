<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>04 - Objetos Genericos </title>
</head>

<body>

  <h1>Trabalhando com Objetos Genericos</h1>
  <hr>

  <?php
  $usuario = new stdClass();

  $usuario->nome = "Jhon";
  $usuario->idade = 25;
  $usuario->email = "exemplo@exemplo.com";
  $usuario->contato = ["11-1234-4321", "11-90123-4567"];
  ?>

  <h2>Analisando a estrutura do objeto</h2>
  <pre><?= var_dump($usuario) ?></pre>
  <hr>

  <h2>Saída de dados</h2>
  <p>Nome: <?= $usuario->nome ?></p>
  <p>Idade: <?= $usuario->idade ?></p>
  <p>E-mail: <?= $usuario->email ?></p>
  <p>Contato: <?= $usuario->contato[1] ?></p>
  <hr>

  <h2>Convertendo objetos em arrays</h2>
  <?php
  $arrayUsuario = (array) $usuario;
  ?>

  <h3>Analisando o array gerado a partir de um objeto</h3>
  <pre><?= var_dump($arrayUsuario) ?></pre>
  <hr>

  <h2>Convertendo array associativo em objeto</h2>
  <?php
  $aluno = ["nome" => "jhon", "Idade" => 25];
  $objAluno = (object) $aluno;
  ?>

  <h3>Analisando o objeto gerado a partir de um Array associativo</h3>
  <pre><?= var_dump($objAluno) ?></pre>
  <hr>
</body>

</html>