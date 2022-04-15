<?php

require_once __DIR__. '/utente.php';


class Registrato extends Utente{
  
  public $email;
  protected $password;
  protected $sconto = 20;
  protected $carrello;
  
  public function __construct($_nome, $_cognome, $_email, $_password){

    parent::__construct($_nome,$_cognome);
    try{
      $this->setEmail($_email);
      $this->setPassword($_password);
      
    }catch (Exception $e){
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