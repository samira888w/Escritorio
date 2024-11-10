<?php

require_once 'classes/Item.php';

class Documento extends Item
{
    private string $dataCriacao;


    public function __construct(string $nome, string $descricao, string $dataCriacao) {
        parent::__construct($nome, $descricao);
        $this->setDataCriacao($dataCriacao);
    }

    public function getDataCriacao(): string {
        return $this->dataCriacao;
    }

    public function setDataCriacao(string $dataCriacao): void{
        if(empty($dataCriacao)) {
            echo "O documento necessita de uma data";
        } else {
            $this->dataCriacao = $dataCriacao;
        }
    }

    public function mostrar(): string{
        return "Nome: {$this->getNome()}, Descrição: {$this->getDescricao()}, Data: {$this->getDataCriacao()}.";
    }
}

?>