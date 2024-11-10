<?php
class Item
{
    private string $nome;
    private string $descricao;

    public function __construct(string $nome, string $descricao)
    {
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function getNome(): string{
        return $this->nome;
    }
    public function setNome(string $nome): void{
        if(empty($nome)){
            echo "O nome do item não pode ser vazio";
    } else {
        $this->nome = $nome;
    }
    }

    public function getDescricao(): string{
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void{
        if(empty($descricao)){
            echo "O item necessita de uma descrição";
        } else {
            $this->descricao = $descricao;
        }
    }
}
?>