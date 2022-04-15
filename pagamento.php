<?php

class Pagamento{
  public $numero;
  private $cvv;
  private $scadenza;
  
  public function __construct($_numeroCarta, $_cvv, $_scadenza){
    try{
      $this-> setNumero($_numeroCarta);
      $this-> setCvv($_cvv);
      $this->scadenza = $_scadenza;
    }catch(Exception $e){
      echo 'Error:' .$e->getMessage();
    }
  }

  //controllo se il cvv è un numero uguale a 3
  public function setCvv($cvv){
    if(is_numeric($cvv) && strlen($cvv)==3){ 
      $this->cvv = $cvv;
    }else{
      throw new Exception('Il cvv deve essere un numero di 3 cifre');
    }
  }

  //controllo se il numero della carta è un numero uguale a 16
  public function setNumero($numero){
    if(is_numeric($numero) && strlen($numero)==16){ 
      $this->numero = $numero;
    }else{
      throw new Exception('Il numero della carta deve essere un numero di 16 cifre');
    }
  }
};