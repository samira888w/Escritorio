<?php

require_once 'Item.php';

class Gaveta
{
    private $itens = [];

    public function __construct(array $itens) {
        $this->setItens($itens);
    }

    public function getItens(): array{
        return $this->itens;
    }

    public function setItens(array $itens): void{
        if(empty($itens)) {
            echo "A gaveta necessita de um item";
        } else {
            $this->itens = $itens;
        }
    }

    public function adicionarItem(Item $item) {
        $this->itens[] = $item;
    }

    public function removerItem($nome) {
        foreach($itens as $index => $item) {
            if($item->getNome() == $nome) {
                unset($this->itens[$index]);
                return true;
            }
        } 
        return false;
    }

    public function listarItens() {
       return $this->itens;
    }
}
?>