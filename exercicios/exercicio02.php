<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 02 PHP e HTML: Arrays</title>

  <style>
    * {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      list-style: none;
      transition: all .5s;
    }

    body {
      height: 100vh;
    }

    article,
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    article {
      padding: .5rem;
    }

    .users {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-top: 1rem;
    }

    .users section {
      background-color: rgb(163, 43, 157);
      border-radius: .5rem;
      padding: 1rem;
      color: #fff;
      cursor: pointer;

      flex: 1 200px;
    }

    .users section:hover {
      transform: scale(1.05);
    }

    .users section h3 {
      margin-bottom: 1rem;
      text-align: center;
    }

    .users section ul {
      display: flex;
      flex-direction: column;
      gap: .5rem;
    }
  </style>
</head>

<body>
  <!-- Em um novo arquivo (exercicio02.php), crie dois arrays para armazenar os dados fictícios de duas pessoas diferentes: nome de usuario, email, senha, idade, sexo e cidade.
 
Em seguida, mostre os valores de nome de usuario, email, idade e sexo de cada pessoa dentro de tags HTML de conteúdo (como article, section, h2, p etc).
 
Desafio: destaque estes dois blocos de conteúdo usando CSS e mostre-os lado a lado usando flexbox. -->

  <?php
  $fulano = [
    "nome" => "Fulano da Silva",
    "email" => "fulano@exemplo.com",
    "senha" => "1234567",
    "idade" => "25",
    "sexo" => "Masculino",
    "cidade" => "São Paulo",
  ];

  $ciclano = [
    "nome" => "Ciclano da Silva",
    "email" => "ciclano@exemplo.com",
    "senha" => "7654321",
    "idade" => "52",
    "sexo" => "Feminino",
    "cidade" => "Paulo São",
  ];

  $users = [
    "fulano" => [
      "nome" => "Fulano da Silva",
      "email" => "fulano@exemplo.com",
      "senha" => "1234567",
      "idade" => 25,
      "sexo" => "Masculino",
      "cidade" => "São Paulo",
    ],
    "ciclano" => [
      "nome" => "Ciclano da Silva",
      "email" => "ciclano@exemplo.com",
      "senha" => "7654321",
      "idade" => 52,
      "sexo" => "Feminino",
      "cidade" => "Paulo São",
    ]
  ];


  ?>

  <!-- <article>
    <h2>Usuários</h2>

    <div class="users">
      <section>
        <h3>Usuário 1</h3>
        <ul>
          <li>Nome: <?= $fulano["nome"] ?></li>
          <li>Email: <?= $fulano["email"] ?></li>
          <li>idade: <?= $fulano["idade"] ?></li>
          <li>Sexo: <?= $fulano["sexo"] ?></li>
        </ul>
      </section>


      <section>
        <h3>Usuário 2</h3>
        <ul>
          <li>Nome: <?= $ciclano["nome"] ?></li>
          <li>Email: <?= $ciclano["email"] ?></li>
          <li>Idade: <?= $ciclano["idade"] ?></li>
          <li>Sexo: <?= $ciclano["sexo"] ?></li>
        </ul>
      </section>
    </div>
  </article> -->

  <article>
    <h2>Usuários</h2>

    <div class="users">
      <section>
        <h3>Usuário 1</h3>
        <ul>
          <li>Nome: <?= $users["ciclano"]["nome"] ?></li>
          <li>Email: <?= $users["ciclano"]["email"] ?></li>
          <li>idade: <?= $users["ciclano"]["idade"] ?></li>
          <li>Sexo: <?= $users["ciclano"]["sexo"] ?></li>
        </ul>
      </section>


      <section>
        <h3>Usuário 2</h3>
        <ul>
          <li>Nome: <?= $users["fulano"]["nome"] ?></li>
          <li>Email: <?= $users["fulano"]["email"] ?></li>
          <li>Idade: <?= $users["fulano"]["idade"] ?></li>
          <li>Sexo: <?= $users["fulano"]["sexo"] ?></li>
        </ul>
      </section>
    </div>
  </article>
</body>

</html>