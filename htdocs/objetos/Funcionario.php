<?php

class Funcionario {
    private $nome;
    private $cpf;
    private $telefone;
    private $cargo;
// 
    public function __construct($nome, $cpf, $telefone, $cargo) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->cargo = $cargo;
    }
// 
    public function getNome()
    {
        return $this->nome;
    }
//
    public function getCpf()
    {
        return $this->cpf;
    }
// 
    public function getTelefone()
    {
        return $this->telefone;
    }
// 
    public function getCargo()
    {
        return $this->cargo;
    }
}


