<?php

require_once __DIR__. '/pagamento.php';
require_once __DIR__. '/carrello.php';

class Utente{
  public $nome;
  public $cognome;
  protected $metodoPagamento = []; //array di carte di pagamento
  
  public function __construct($_nome, $_cognome){
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->carrello = new Carrello();
  }

  public function addMetodoPagamento($numeroCarta, $cvv, $scadenza){ //funzione che aggiunge metodo di pagamento in array
    array_push($this->metodoPagamento , new Pagamento($numeroCarta, $cvv, $scadenza));
  }

  public function getCarrello()
  {
    return $this->carrello;
  }
};