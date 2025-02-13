<?php

define("ESCOLA", "Senac");

$curso = "Técnico em informatica para a internet";

$tecnologias = ["HTML", "CSS", "JS", "PHP"];

function verificarIdade(int $valorDaIdade): string
{
  return $valorDaIdade >= 18 ? "maior" : "menor";
}
