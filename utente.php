<?php

require_once __DIR__. '/pagamento.php';

class Utente{
  public $nome;
  public $cognome;
  public $metodoPagamento = []; //array di carte di pagamento

  public function __construct($_nome, $_cognome){
    $this->nome = $_nome;
    $this->cognome = $_cognome;
  }

  public function addMetodoPagamento($numeroCarta, $cvv, $scadenza){ //funzione che aggiunge metodo di pagamento in array
    array_push($this->metodoPagamento , new Pagamento($numeroCarta, $cvv, $scadenza));
  }
};