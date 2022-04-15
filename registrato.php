<?php

require_once __DIR__. '/utente.php';
class Registrato extends Utente{
  public $email;
  public $password;
  public $sconto;
  
  public function __construct($_nome, $_cognome, $_email, $_password){

    parent::__construct($_nome,$_cognome);
    try{
      $this->setEmail($_email);
      $this->setPassword($_password);
      $this->sconto = 20;
    }catch( Exception $e){
      echo 'Error: ' .$e->getMessage();
    }
  }

  public function setEmail($email){
    if($email != ''){
      $this->email = $email;
    }else{
      throw new Exception('scrvi email correttamente');
    }
  }

  public function setPassword($password){
    if($password != ''){
      $this->password = $password;
    }else{
      throw new Exception('scrvi password correttamente');
    }
  }
  
};