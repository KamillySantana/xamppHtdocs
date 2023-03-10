<?php

class Cliente {
    private $nome;
    private $email;
    private $cpf;
    private $telefone;
// 
    public function __construct($nome, $email, $cpf, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }
// 
    public function getEmail()
    {
        return $this->email;
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

}