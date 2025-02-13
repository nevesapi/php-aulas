<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>09 - Funções nativas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Usando funções nativas</h1>
    <hr>

    <h2>Strings</h2>
    <h3><code>trim()</code></h3>
    <p>Remove espaços antes e depois</p>
    <?php
    $texto = "       Paulo Henrique está me devendo paçocas             ";
    $textoTrim = trim($texto);
    ?>

    <pre class="alert alert-info"><?= var_dump($texto); ?></pre>
    <pre><?= var_dump($textoTrim); ?></pre>

    <hr>
    <h3><code>str_replace()</code></h3>
    <p>Permite substituir partes de uma string.</p>

    <?php
    $fraseFeia = "Joao é feio";
    $fraseLinda = str_replace("feio", "legal", $fraseFeia);

    $exemplo = "Joao é feio e bobão";
    $exemploStr = str_replace(
      ["feio", "bobão"],
      ["👌", "🤣"],
      $exemplo
    );
    ?>
    <pre class="alert alert-info"><?= var_dump($fraseFeia); ?></pre>
    <pre><?= var_dump($fraseLinda); ?></pre>

    <pre class="alert alert-info"><?= var_dump($exemplo); ?></pre>
    <pre><?= var_dump($exemploStr); ?></pre>

    <hr>

    <h3><code>explode()</code></h3>
    <p>Transformar uma string em um array</p>
    <?php
    $pizza  = "piece1, piece2, piece3, piece4, piece5, piece6";
    $explodePizza = explode(",", $pizza);
    ?>

    <pre class="alert alert-info"><?= var_dump($pizza); ?></pre>
    <pre><?= var_dump($explodePizza); ?></pre>
    <hr>


    <h2>Arrays</h2>
    <h3><code>implode()</code></h3>
    <p>Transformar um array em uma string</p>
    <?php
    $pizza  = ["piece1, piece2, piece3, piece4, piece5, piece6"];
    $explodePizza = implode("-", $pizza);
    ?>

    <pre class="alert alert-info"><?= var_dump($pizza); ?></pre>
    <pre><?= var_dump($explodePizza); ?></pre>
    <hr>


    <h3><code>extract()</code></h3>
    <p>Extrai chaves associativas para variáveis</p>
    <?php
    $aluno = [
      "id" => 1,
      "nome" => "Peves",
      "idade" => 25
    ];

    extract($aluno);
    ?>

    <ul>
      <li class="">ID: <?= $id ?></li>
      <li class="">Nome: <?= $nome ?></li>
      <li class="">Idade: <?= $idade ?></li>
    </ul>
    <hr>

    <h3><code>array_sum()</code></h3>
    <p>Soma valores de um array numérico</p>
    <?php
    $valores = [10, 20, 50, 1000, 500];
    $total = array_sum($valores);
    ?>

    <p>soma do valores do array: <b><?= $total ?></b></p>
    <hr>

    <h3><code>array_unique()</code></h3>
    <p>Retorna um novo array com dados <b>únicos</b></p>
    <?php
    $prdutos = ["tv", "notebook", "tv", "tv", "geladeira", "monitor", "mouse", "webcam", "notebook"];
    $uniqueProdutos = array_unique($prdutos);
    ?>

    <pre class="alert alert-info"><?= var_dump($prdutos); ?></pre>
    <pre><?= var_dump($uniqueProdutos); ?></pre>
    <hr>


    <h2>Númericas</h2>
    <h3><code>min(), max(), round()</code></h3>
    <p>Retorna um novo array com dados <b>únicos</b></p>
    <?php
    $valorQualquer = 1259.75;
    ?>

    <pre class="alert alert-info">Menor valor: <?= min($valores); ?></pre>
    <pre class="alert alert-info">Maior valor: <?= max($valores); ?></pre>
    <pre class="alert alert-success">Arredondamento: <?= round($valorQualquer); ?></pre>
    <hr>


    <h2>Filtros</h2>
    <p>Recursos/Funções/Constantes de análise e limpeza de dados aplicados atraveés da funções <code>filter_var()</code> e <code>filterinput()</code></p>

    <h3>Validação</h3>
    <?php
    $email = "teste.teste.com";
    $emailCorreto = "teste@teste.com";
    ?>
    <pre class="alert alert-danger"><?= var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)); ?></pre>
    <pre class="alert alert-info"><?= var_dump(filter_var($emailCorreto, FILTER_VALIDATE_EMAIL)); ?></pre>
    <hr>

    <h3>Sanitização</h3>
    <?php
    $ataqueDeRaquir = "<script>
      document.body.innerHTML = `<h1 class='alert alert-danger'> Sou rarquerr 🤣🤣🤣🤣🤣🤣🤣🤣🤣🤣🤣🤣</h1> `
    </script>";
    // echo $ataqueDeRaquir;

    $ataqueSanitizado = filter_var($ataqueDeRaquir, FILTER_SANITIZE_SPECIAL_CHARS);
    echo $ataqueSanitizado;

    ?>

    <hr>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>