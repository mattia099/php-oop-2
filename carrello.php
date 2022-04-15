<?php
require_once __DIR__. '/prodotto.php';
class Carrello{
  public $prodotti = [];
  public $prezzoTotale = 0;
  public $id;
  public $sconto;
  
  
  public function addProdotto($nomeprodotto,$prezzo,$quantita){
    array_push($this->prodotti, new Prodotto($nomeprodotto, $prezzo, $quantita));
    $this->prezzoTotale += $prezzo*$quantita; 
  }


}