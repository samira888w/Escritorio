<?php

require_once 'classes/Item.php';

class Objeto extends Item
{
    private float $peso;

    public function __construct(string $nome, string $descricao, float $peso) {
        parent::__construct($nome, $descricao);
        $this->setPeso($peso);
    }

    public function getPeso(): float{
        return $this->peso;
    }

    public function setPeso(float $peso): void{
        if(empty($peso)) {
            echo "O objeto necessita de um peso";
        } else {
            $this->peso = $peso;
        }
    }

    public function mostrar(): string{
        return "Nome: {$this->getNome()}, Descrição: {$this->getDescricao()}, Peso: {$this->getPeso()}";
    }
}
?>