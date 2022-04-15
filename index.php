<?php

require_once __DIR__. '/utente.php';
require_once __DIR__. '/registrato.php';
require_once __DIR__. '/prodotto.php';
//require_once __DIR__. '/ordine.php';
//require_once __DIR__. '/carrello.php';


//prodotto
$prova = new Prodotto('croccantini', 10.00, 1 );

var_dump($prova);
echo '<br>';

//utente non registrato
$utente1 = new Utente('Ciccio' ,'Franco');
$utente1->addMetodoPagamento(1568418312345678, 123 , '10/12');
var_dump($utente1);

echo '<br>';

//utente registrato
$login1 = new Registrato('Ciccio','Franco','cicciofranco@hotmail.it','ciccio99!');
$login1->addMetodoPagamento(1568418312345678, 123 , '10/12');



//carrello

$login1->getCarrello()->addProdotto('croccatini', 10.00, 1);

var_dump($login1);