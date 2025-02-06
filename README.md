# Aprendendo o básico de PHP

Nesse repositório existem alguns exemplos que vimos durante as aulas de PHP para por em prática a sintaxe básica e conhecer algumas estrutras do PHP.

<img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" width="80" height="80"/>

## Sobre o conteudo

O repositório está em atualização constante, mas até o momento, temos arquivos sobre:

+ Php Info
 + Verificando o status e as informações sobre o PHP
+ Sintaxe geral
  + Regras gerais de escrita e saída com o comando: ``echo``, além da short sintax ``<?=$variavel ?>``
+ Variáveis e constantes
  + Conhecendo a sintaxe de variáveis PHP com: ``define(), const e $``
+ Arrays
  + Arrays Indexados
  + Arrays associativos
  + Matriz (array dentro de array)
+ Objetos
  + Criando objetos com 
    + ``$usuario = new stdClass();``
  + Inserindo valores
    +  ``$usuario->nome = "Jhon";``
  + Saída de dados
  + Convertendo objetos em arrays 
    + ``$arrayUsuario = (array) $usuario;``
  + Convertendo array associativo em objeto 
    + ``$aluno = ["nome" => "jhon", "Idade" => 25];``
    + ``$objAluno = (object) $aluno;``
+ Condicionais
  + Simples - **_if_**
  + Compostas - **_if/else_**
  + Encadeada - **_if/elseif/else_**
+ Operadores Lógicos
  + NÃO/NOT - **_!_**
  + E/AND - **_&&_**
  + OU/OR - **_||_**