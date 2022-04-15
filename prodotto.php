<?php 

class Prodotto{
  public $nome;
  public $prezzo;
  public $tipo;
  public $quantita;

  public function __construct(string $_prodotto, float $_prezzo, string $_tipo ,int $_quantita){
    $this->nome = $_prodotto;
    $this->prezzo = $_prezzo;
    $this->tipo = $_tipo;
    $this->quantita = $_quantita;
  }
};


