<?php

require_once "Contato.php";

$contato1 = new Contato();

$contato1-> nome = "Raquel";
$contato1-> numero = "56567834";

echo $contato1->nome;

