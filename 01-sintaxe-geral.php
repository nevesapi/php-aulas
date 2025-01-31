<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Sintaxe geral</title>
  <style>
    .exemplo {
      color: red;
      border: 4px solid orange;
      padding: 4px;
      text-transform: uppercase;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <h1>Trabalhando com PHP</h1>

  <hr />
  <?php
  $nome = "Echo";

  //errado
  // echo "<p><abbr title="Sport Club">SCCP</abbr></p>"; 

  //certo
  echo '<p><abbr title="Sport Club Corinthians Paulista">SCCP</abbr></p>';

  //aceitavel
  echo "<p><abbr title='Sport Club Corinthians Paulista'>SCCP</abbr></p>";

  echo "<h2>brincando com <span class='exemplo'>php</span></h2>";

  $saudacao = 'Olá';

  ?>

  <script>
    const exemplo = document.querySelector('.exemplo')
    exemplo.addEventListener("click", () => {
      console.log("<?php echo $saudacao; ?>");
    });
  </script>
</body>

</html>