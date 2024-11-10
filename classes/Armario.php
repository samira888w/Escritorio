<?php

class Armario
{
    private $gavetas = [];

    public function __construct(array $gavetas)
    {
        $this->setGavetas($gavetas);
    }

    public function getGavetas(): array{
        return $this->gavetas;
    }

    public function setGavetas(array $gavetas): void{
        if(empty($gavetas)){
            echo "Deve haver um item nas gavetas";
        } else {
            $this->gavetas = $gavetas;
        }
    }

    public function adicionarGaveta(Gaveta $gaveta) {
        $this->gavetas[] = $gaveta;
    }

    public function removerGaveta($index) {
        unset($this->gavetas[$index]);
        return true;
    }

    public function listarGavetas() {
        return $this->gavetas;
    }
}
?>