<!DOCTYPE html>
<html lang="en">
<?php
$caminho = basename($_SERVER["REQUEST_URI"]);

switch ($caminho) {
  case "index.php":
    $titulo = "Página Inicial";
    break;

  case "duvidas.php":
    $titulo = "Duvidas";
    break;

  case "contato.php":
    $titulo = "Contato";
    break;

  case "cursos.php":
    $titulo = "Treinamentos";
    break;
  default:
    $titulo = "";
    break;
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | <?= $titulo ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <header>
      <h1>Logo</h1>
      <nav>
        <a href="index.php">Home</a>
        <a href="cursos.php">Treinamentos</a>
        <a href="duvidas.php">Dúvidas</a>
        <a href="contato.php">Contato</a>
      </nav>
    </header>
    <main>