<?php

include "objetos/Cliente.php";
include "objetos/Funcionario.php";
include "objetos/Quarto.php";

// instanciando para ser um objeto, new
$objCliente = new Cliente("Kamilly", "kamilly@gmail.com", "361.478.895-78", "(18) 6578-8978");
$objFuncionario = new funcionario("kami", "678.456.234-89", "(18) 7867-4534", "Atendente");


include "view/home.php";