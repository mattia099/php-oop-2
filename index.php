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
$utente1->getCarrello()->addProdotto('museruola', 5, 1);
var_dump($utente1);

echo '<br><br>';

//utente registrato
$login1 = new Registrato('Ciccio','Franco','cicciofranco@hotmail.it','ciccio99!');
$login1->addMetodoPagamento(1568418312345678, 123 , '02/24');

$login2 = new Registrato('Mario', 'Rossi', 'mariorossi@gmail.com' , 'vivalavita!1');
$login2->addMetodoPagamento(5849625481334884, 865 , '10/25');

//carrello

$login1->getCarrello()->addProdotto('croccatini', 10.00, 1);

$login2->getCarrello()->addProdotto('croccantini', 10.00, 2);

var_dump($login1);
echo '<br><br>';
var_dump($login2);