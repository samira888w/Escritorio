<?php

require_once 'classes/Item.php';

class Pasta extends Item
{
    private string $categoria;

    public function __construct(string $nome, string $descricao, string $categoria) {
        parent::__construct($nome, $descricao);
        $this->setCategoria($categoria);
    }

    public function getCategoria(): string{
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void{
        if(empty($categoria)) {
            echo "A pasta necessita conter uma categoria";
        } else {
            $this->categoria = $categoria;
        }
    }

    public function mostrar(): string{
        return "Nome: {$this->getNome()}, Descrição: {$this->getDescricao()}, Categoria: {$this->getCategoria()}.";
    }
}
?>