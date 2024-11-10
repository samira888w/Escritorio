<?php

require_once 'Armario.php';

class Escritorio 
{
   private $armarios = [];

   public function __construct(array $armarios)
   {
        $this->setArmarios($armarios);
   }

   public function getArmarios(): array{
      return $this->armarios;
   }

   public function setArmarios(array $armarios): void{
       if(empty($armarios)) {
         echo "O armário deve conter gavetas";
       } else {
         $this->armarios = $armarios;
       }
   }

   public function adicionarArmario(Armario $armarios) {
      $this->armarios[] = $armarios;
   }

   public function removerArmario($index) {
      unset($this->armarios[$index]);
      return true;
   }

   public function listarArmario() {
     return $armarios;
   }

   public function auditoria() {
      foreach($this->armarios as $indexArmario => $armario) {
          echo "<hr> Armário $indexArmario: <br>";
  
          foreach($armario->listarGavetas() as $indexGavetas => $gaveta) {
              echo "<hr> Gaveta $indexGavetas: <br>";
  
              foreach($gaveta->listarItens() as $item) {
                  echo "{$item->mostrar()} <br>";
              }
          }
      }
   }
}
?>