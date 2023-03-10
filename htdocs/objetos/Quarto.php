<?php

class Quarto {
    private $andar;
    private $numero;
    private $ocupacao;
    private $valor;
// 
    public function __construct($andar, $numero, $ocupacao, $valor) {
        $this->andar = $andar;
        $this->numero = $numero;
        $this->ocupacao = $ocupacao;
        $this->valor = $valor;
    }
// 
    public function getAndar()
    {
        return $this->andar;
    }
//
    public function getNumero()
    {
        return $this->numero;
    }
// 
    public function getOcupacao()
    {
        return $this->ocupacao;
    }
// 
    public function getValor()
    {
        return $this->valor;
    }
}
