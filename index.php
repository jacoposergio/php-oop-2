<?php
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// BONUS:
// Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto.

require_once __DIR__ . '/DogProducts.php';
require_once __DIR__ . '/SnakeProducts.php';
require_once __DIR__ . '/BirdProducts.php';
require_once __DIR__ . '/Utente.php';


$dog = new DogProducts('kibble','peluche');
var_dump($dog);

$snake = new SnakeProducts('rats','wood trunk');
var_dump($snake);

$bird = new birdProducts('feed','sprigs');
var_dump($bird);

$ciro_esposito = new Utente('Ciro Esposito');
var_dump($ciro_esposito);
?>