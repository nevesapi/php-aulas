<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>03 - Trabalhando com Arrays</title>
  <style>
    * {
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <h1>Trabalhando com os arrays</h1>
  <hr>

  <?php
  //sintaxe com colchetes
  $bandas = ["Red Hot Chilli Peppers", 'Arctic Monkeys', "Sundiver CA "];

  //sintaxe com função array()
  $cursos = array("HTML5", "Node.js", "PHP");

  //sintaxe de atrinuição manual usando os índices
  $comidas[0] = "Bolo";
  $comidas[1] = "Pastel";
  $comidas[2] = "Coxinhas";

  //constantes de array
  define("UNIDADES", ["Penha", "Tatuapé"]);

  const FRUTAS = ["Morango", "Abacaxi"];
  ?>

  <h3>Acessando dados de Arrays Indexados</h3>
  <ul>
    <li>Banda maneira: <strong><?= $bandas[1] ?></strong>.</li>
    <li>O Tiago vai lançar o curso de: <strong><?= $cursos[2] ?></strong>.</li>
    <li>O Tiago vai comer: <strong><?= $comidas[2] ?></strong>.</li>
    <li>O Tiago está na unidade: <strong><?= UNIDADES[0] ?></strong>.</li>
    <li>O Tiago vai fazer uma caipirinha(VITMAMINA) de: <strong><?= FRUTAS[0] ?></strong>.</li>
  </ul>

  <hr>

  <h2>Arrays associativos</h2>

  <?php
  $curso = [
    "teste" => "testando",
    "carga_horaria" => 200,
    "descricao" => "Testando o teste de arrays associativos",
  ];
  ?>

  <h3>Acessando dados de Arrays associativos</h3>
  <p><?= $curso["teste"] ?></p>

  <hr>
  <h2>Matriz (array dentro de array)</h2>

  <?php
  $planoDeEstudos = [
    ["JS Avançado", "Node.js", "Next.js"],
    ["HTML5", "PHP"],
    ["TailwindCSS", "BootStrap"]
  ];
  ?>

  <h3>Acessando dados de Matriz (array dentro de array)</h3>
  <p><?= $planoDeEstudos[1][1]; ?></p>

  <hr>
  <h2>Funções de análise/depuração/debug de estruturas de dados</h2>
  <h3>print_r()</h3>
  <pre><?= print_r($bandas) ?></pre>
  <h3>var_dump()</h3>
  <pre><?= var_dump($bandas) ?></pre>

</body>

</html>