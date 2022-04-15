<?php

require_once __DIR__. '/utente.php';
//require_once __DIR__. '/registrato.php';
require_once __DIR__. '/prodotto.php';
//require_once __DIR__. '/ordine.php';
//require_once __DIR__. '/carrello.php';

$prova = new Prodotto('croccantini', 10.00, 'cibo', 1 );

var_dump($prova);

$utente1 = new Utente('Ciccio' ,'Franco');
$utente1->addMetodoPagamento(1568418312345678, 123 , '10/12');
var_dump($utente1);